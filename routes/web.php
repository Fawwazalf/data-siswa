<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HobbyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NISNController;
use App\Http\Controllers\PhoneNumberController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SocialiteController;
use App\Http\Controllers\UserController;
use App\Jobs\ProcessTestMail;
use App\Mail\TestMail;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware('guest')->name('password.request');

Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        credentials: $request->only('email')
    );

    return $status === Password::ResetLinkSent
        ? back()->with(['status' => __($status)])
        : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');

Route::get('/reset-password/{token}', function (string $token) {
    return view('auth.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:6|confirmed',
    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function (User $user, string $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));

            $user->save();

            event(new PasswordReset($user));
        }
    );

    return $status === Password::PasswordReset
        ? redirect()->route('login')->with('status', __($status))
        : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');

Route::middleware(['auth', 'role:Super Admin|Admin|User'])->group(function () {
    Route::get('/', [HomeController::class, 'index']);
    Route::resource('siswas', SiswaController::class);
    Route::resource('nisns', NISNController::class);
    Route::resource('phone_numbers', PhoneNumberController::class);
    Route::resource('hobbies', HobbyController::class);
    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
});


Route::get('/auth/{provider}', [SocialiteController::class, 'redirect'])->name('login.provider');


Route::get('/auth/{provider}/callback', [SocialiteController::class, 'callback']);

Route::get('/send-test-mail', function () {

    for ($i = 1; $i <= 10; $i++) {
        $user = ['name' => 'user' . $i, 'email' => 'user' . $i . '@example.com', 'password' => 'password' . $i];
        //     Mail::to($user['email'])->send(new TestMail($user));
        sleep(2);
        ProcessTestMail::dispatch($user);
    }

    return 'Email sent';
})->name('send-test-mail');
