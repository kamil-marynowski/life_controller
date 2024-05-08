<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CashController\WalletController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', DashboardController::class)->name('dashboard');

Route::middleware('guest')->name('auth.')->group(function () {
    Route::match(['GET', 'POST'], '/login',    [AuthController::class, 'login'   ])->name('login'   );
    Route::match(['GET', 'POST'], '/register', [AuthController::class, 'register'])->name('register');
});

Route::middleware('auth')->group(function () {
    Route::middleware('role:user')->group(function () {
        Route::prefix('/cash-controller')->name('cash_controller.')->group(function () {
            Route::prefix('/wallets')->name('wallets.')->group(function () {
                Route::get   ('/',              [WalletController::class, 'index'  ])->name('index'  );
                Route::get   ('/create',        [WalletController::class, 'create' ])->name('create' );
                Route::post  ('/',              [WalletController::class, 'store'  ])->name('store'  );
                Route::get   ('/{wallet}/edit', [WalletController::class, 'edit'   ])->name('edit'   );
                Route::put   ('/{wallet}',      [WalletController::class, 'update' ])->name('update' );
                Route::delete('/{wallet}',      [WalletController::class, 'destroy'])->name('destroy');
            });
        });
    });


});
