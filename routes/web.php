<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HobbyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NISNController;
use App\Http\Controllers\PhoneNumberController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SiswaController;

use Illuminate\Support\Facades\Route;

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class, 'index']);
    Route::resource('siswas', SiswaController::class);
    Route::resource('nisns', NISNController::class);
    Route::resource('phone_numbers', PhoneNumberController::class);
    Route::resource('hobbies', HobbyController::class);
});
