<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    // Menampilkan halaman login
    public function showLogin()
    {
        return view('auth.login');
    }

    // Proses login
    public function login(Request $request)
    {
            // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'role' => 'required|in:user,admin',
        ]);

        $email = strtolower(trim($request->email));
        $role = $request->role;

        // Pemeriksaan email admin
        if (
            $role == 'admin' &&
            !str_ends_with($email, '@dailycrave.com')
        ) {
            return back()->withErrors([
                'email' => 'Admin harus menggunakan email @dailycrave.com.'
            ])->withInput($request->only('email', 'role'));
        }

        // Pelanggan tidak boleh menggunakan email admin
        if (
            $role == 'user' &&
            str_ends_with($email, '@dailycrave.com')
        ) {
            return back()->withErrors([
                'email' => 'Silakan login melalui pilihan Admin.'
            ])->withInput($request->only('email', 'role'));
        }

        // Data login
        $credentials = [
            'email' => $email,
            'password' => $request->password,
            'role' => $role,
        ];

        // Proses login
        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            // Jika admin
            if (Auth::user()->role == 'admin') {

                return redirect()->route('admin.dashboard');
            }

            // Jika pelanggan
            return redirect()->route('dashboard');
        }

        // Jika login gagal
        return back()->withErrors([
            'email' => 'Email atau password salah.'
        ])->withInput($request->only('email', 'role'));
    }
    // Menampilkan halaman register
    public function showRegister()
    {
        return view('auth.register');
    }

    // Proses register
    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        Auth::login($user);

        $request->session()->regenerate();

        return redirect()->route('dashboard')
            ->with('status', 'Akun berhasil dibuat!');
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}