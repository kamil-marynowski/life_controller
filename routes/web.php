<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->name('auth')->group(function () {
    Route::match(['GET', 'POST'], '/login',    [AuthController::class, 'login'   ])->name('login'   );
    Route::match(['GET', 'POST'], '/register', [AuthController::class, 'register'])->name('register');
});
