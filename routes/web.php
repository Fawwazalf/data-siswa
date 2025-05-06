<?php

use App\Http\Controllers\HobbyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NISNController;
use App\Http\Controllers\PhoneNumberController;
use App\Http\Controllers\SiswaController;

use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::resource('siswas', SiswaController::class);
Route::resource('nisns', NISNController::class);
Route::resource('phone_numbers', PhoneNumberController::class);
Route::resource('hobbies', HobbyController::class);