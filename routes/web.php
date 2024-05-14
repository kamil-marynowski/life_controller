<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CashController\WalletController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EducationController\Languages\FlashcardController;
use App\Http\Controllers\EducationController\Languages\LanguageController;
use Illuminate\Support\Facades\Route;

Route::get('/', DashboardController::class)->name('dashboard');

Route::name('auth.')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::match (['GET', 'POST'], '/login',    [AuthController::class, 'login'   ])->name('login'   );
        Route::match (['GET', 'POST'], '/register', [AuthController::class, 'register'])->name('register');
    });

    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
});

Route::middleware('auth')->group(function () {
    Route::middleware('auth')->group(function () {
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

        Route::prefix('/education-controller')->name('education_controller.')->group(function () {
            Route::prefix('/languages')->name('languages.')->group(function () {
                Route::get('/', [LanguageController::class, 'index'])->name('index');
                Route::get('/create', [LanguageController::class, 'create'])->name('create')->middleware('role:admin');
                Route::post('/', [LanguageController::class, 'store'])->name('store')->middleware('role:admin');
                Route::get('/{language}', [LanguageController::class, 'show'])->name('show');

                Route::prefix('/{language}/flashcards')->name('flashcards.')->group(function () {
                    Route::get('/', [FlashcardController::class, 'index'])->name('index');
                    Route::get('/create', [FlashcardController::class, 'create'])->name('create')->middleware('role:admin');
                    Route::post('/', [FlashcardController::class, 'store'])->name('store')->middleware('role:admin');
                });
            });
        });
    });


});
