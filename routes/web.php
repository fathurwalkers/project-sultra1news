<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackController;
use App\Http\Controllers\FrontController;

Route::get('/', [FrontController::class, 'home']);

Route::prefix('/dashboard')->group(function () {
    Route::get('/', [FrontController::class, 'index']);
});
