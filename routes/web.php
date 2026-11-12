<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MainCourseController;
use App\Http\Controllers\NusantaraController;
use App\Http\Controllers\ComfortController;
use App\Http\Controllers\ExtraController;
use App\Http\Controllers\CoffeeandTeaController;




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
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');

// MENU MAKANAN
Route::get('/maincourse', [MainCourseController::class, 'index'])
    ->name('maincourse');

Route::get('/nusantara', [NusantaraController::class, 'index'])
    ->name('nusantara');

Route::get('/comfort', [ComfortController::class, 'index'])
    ->name('comfort');

Route::get('/extra', [ExtraController::class, 'index'])
    ->name('extra');

// MENU MINUMAN
Route::get('/coffeeandtea', [CoffeeandTeaController::class, 'index'])
    ->name('coffeeandtea');

// MENU COMFORT
Route::get('/maincourse', function () {
    return view('auth.maincourse');
})->name('maincourse');

// MENU COMFORT
Route::get('/comfort', function () {
    return view('auth.comfort');
})->name('comfort');

// MENU EXTRA
Route::get('/extra', function () {
    return view('auth.extra');
})->name('extra');

// MENU NUSANTARA
Route::get('/nusantara', function () {
    return view('auth.nusantara');
})->name('nusantara');

//MENU EXTRA
Route::get('/extra', function () {
    return view('auth.extra');
})->name('extra');



Route::get('/coffeeandtea', function () {
    return view('auth.coffeeandtea');
})->name('coffeeandtea');
