<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackController;
use App\Http\Controllers\FrontController;
use App\Http\Livewire\PostIndex;

Route::get('/', [FrontController::class, 'home']);

Route::prefix('/dashboard')->group(function () {
    Route::get('/', [FrontController::class, 'index'])->name('dashboard');
    Route::get('/post-index', PostIndex::class)->name('post-index');
});
