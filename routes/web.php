<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MainCourseController;
use App\Http\Controllers\NusantaraController;
use App\Http\Controllers\CoffeandTeaController;




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
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

//menu utama
Route::get('/maincourse', [MaincourseController::class, 'index'])
    ->name('maincourse');

Route::get('/nusantara', [NusantaraController::class, 'index'])
    ->name('nusantara');

// MINUMAN
Route::get('/coffeandtea', [CoffeandTeaController::class, 'index'])
    ->name('coffeandtea');


Route::get('/nusantara', function () {
    return view('auth.nusantara');
})->name('nusantara');

Route::get('/extra', function () {
    return view('auth.extra');
})->name('extra');

Route::get('/comfort', function () {
    return view('auth.comfort');
})->name('comfort');
