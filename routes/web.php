<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('website/index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// pubic Route
// Route::post('register-user', [App\Http\Controllers\Auth\RegisterController::class, 'index'])->name('register-user');

// Route::get('login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');

// Route::post('login', [LoginController::class, 'login']);
// Route::post('logout', [LoginController::class, 'logout'])->name('logout');
