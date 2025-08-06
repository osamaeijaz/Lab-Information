<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\User\UserDashboardController;

Route::get('/', function () {
    return view('website/index');
});

Auth::routes();
// Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
// Route::post('/register', [RegisterController::class, 'register']);
Route::get('/Admin/Admin-Dashboard', [AdminDashboardController::class, 'dashboard'])->middleware('auth');
Route::get('/User/User-Dashboard', [UserDashboardController::class, 'dashboard'])->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('register-user', [RegisterController::class, 'register_user'])->name('register-user'); 
    



// Public Routes
// Route::post('register-user', [RegisterUserController::class, 'register_user'])->name('register-user');
// Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('login', [LoginController::class, 'login']);
// Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
