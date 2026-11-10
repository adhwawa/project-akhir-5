<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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
// DASHBOARD
Route::get('/dashboard', [NusantaraController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');

// nusantara
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [NusantaraController::class, 'index'])
        ->name('dashboard');

    Route::get('/menu', [NusantaraController::class, 'index'])
        ->name('menu.index');
});