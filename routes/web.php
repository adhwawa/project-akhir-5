<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MinumanController;
use App\Http\Controllers\NusantaraController;


Route::get('/', function () {
    return redirect()->route('login');
});

// LOGIN
Route::get('/login', [AuthController::class, 'showLogin'])
    ->name('login');

Route::post('/login', [AuthController::class, 'login'])
    ->name('login.process');

// REGISTER
Route::get('/register', [AuthController::class, 'showRegister'])
    ->name('register');

Route::post('/register', [AuthController::class, 'register'])
    ->name('register.process');

// LOGOUT
Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout');

//dashbord
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// MINUMAN
Route::get('/minuman', [MinumanController::class, 'index'])
    ->name('minuman.index');

//menu utama
Route::get('/maincourse', function () {
    return view('auth.maincourse');
})->name('maincourse');


Route::get('/nusantara', function () {
    return view('auth.nusantara');
})->name('nusantara');

Route::get('/extra', function () {
    return view('auth.extra');
})->name('extra');

Route::get('/comfort', function () {
    return view('comfort');
})->name('comfort');
