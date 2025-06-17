<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;


// Home
Route::get('/', [HomeController::class, 'index'])->name('home.index');

// Registration
Route::get('/registration', [AuthController::class, 'registration'])->name('auth.registration');
Route::post('registration_post', [AuthController::class, 'registration_post'])->name('auth.registration.post');

Route::get('login', [AuthController::class, 'login'])->name('auth.login');

Route::get('forgot', [AuthController::class, 'forgot'])->name('auth.forgot');