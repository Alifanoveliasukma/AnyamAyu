<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;


// Home
Route::get('/', [HomeController::class, 'index'])->name('home.index');

// Registration
Route::get('/registration', [AuthController::class, 'registration'])->name('auth.registration');