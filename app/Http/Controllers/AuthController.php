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
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'role' => 'required|in:user,admin',
        ]);

        $email = strtolower(trim($request->email));
        $role = $request->role;

        // Pemeriksaan email admin
        if (
            $role === 'admin' &&
            !str_ends_with($email, '@dailycrave.com')
        ) {
            return back()->withErrors([
                'email' => 'Admin harus menggunakan email @dailycrave.com.'
            ])->withInput($request->only('email', 'role'));
        }

        // Pelanggan tidak boleh memakai email admin
        if (
            $role === 'user' &&
            str_ends_with($email, '@dailycrave.com')
        ) {
            return back()->withErrors([
                'email' => 'Silakan login melalui pilihan Admin.'
            ])->withInput($request->only('email', 'role'));
        }

        // Proses autentikasi
        $credentials = [
            'email' => $email,
            'password' => $request->password,
            'role' => $role,
        ];

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            if (Auth::user()->role === 'admin') {
                return redirect()->route('admin.dashboard');
            }

            return redirect()->route('dashboard');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.'
        ])->withInput($request->only('email', 'role'));
    }

    // Menampilkan halaman register
    public function showRegister()
    {
        return view('auth.register');
    }

    // Proses register pelanggan
    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
        ]);

        $email = strtolower(trim($data['email']));

        // Email khusus admin tidak boleh mendaftar sebagai pelanggan
        if (str_ends_with($email, '@dailycrave.com')) {
            return back()->withErrors([
                'email' => 'Email @dailycrave.com khusus untuk admin.'
            ])->withInput($request->only('name', 'email'));
        }

        $user = User::create([
            'name' => $data['name'],
            'email' => $email,
            'password' => Hash::make($data['password']),
            'role' => 'user',
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
