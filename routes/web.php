
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MainCourseController;
use App\Http\Controllers\NusantaraController;
use App\Http\Controllers\ComfortController;
use App\Http\Controllers\ExtraController;
use App\Http\Controllers\CoffeeandTeaController;
use App\Http\Controllers\FreshJuiceController;
use App\Http\Controllers\SoftDrinkController;
use App\Http\Controllers\DessertController;

// HALAMAN AWAL
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

// DASHBOARD
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

Route::get('/freshjuice', [FreshJuiceController::class, 'index'])
    ->name('freshjuice');

Route::get('/softdrink', [SoftDrinkController::class, 'index'])
    ->name('softdrink');

// MENU DESSERT
Route::get('/dessert', [DessertController::class, 'index'])
    ->name('dessert');
