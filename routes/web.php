
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PasswordController;

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('proses_login');
});


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('portofolio.dashboard');
    });

    Route::get('/ubah-password', [PasswordController::class, 'edit'])
        ->name('password.edit');

    Route::put('/ubah-password', [PasswordController::class, 'update'])
        ->name('password.update');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

