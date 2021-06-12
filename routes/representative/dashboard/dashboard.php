<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Representative\Dashboard\DashboardController;


Route::prefix('dashboard')->name('dashboard.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');
});
