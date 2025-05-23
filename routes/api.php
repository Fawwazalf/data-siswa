<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\HobbyController;
use App\Http\Controllers\Api\NISNController;
use App\Http\Controllers\Api\PhoneNumberController;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\SiswaController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::apiResource('/hobbies', HobbyController::class);
Route::apiResource('/siswas', controller: SiswaController::class);
Route::apiResource('/nisns', controller: NISNController::class);
Route::apiResource('/phone_numbers', controller: PhoneNumberController::class);


Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::middleware('auth:api')->post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::middleware('auth:api')->get('/me', function (Request $request) {
    return response()->json([
        'user' => $request->user()
    ]);
});
