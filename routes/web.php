<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackController;
use App\Http\Controllers\FrontController;
use App\Http\Livewire\PostIndex;
use App\Http\Livewire\AddPost;
use App\Http\Livewire\PostDetail;

Route::get('/', [FrontController::class, 'home']);
Route::get('/login', [BackController::class, 'login'])->name('login');
Route::post('/login', [BackController::class, 'post_login'])->name('post-login');
Route::post('/logout', [BackController::class, 'logout'])->name('logout');

Route::prefix('/dashboard')->group(function () {
    Route::get('/', [FrontController::class, 'index'])->name('dashboard');
    Route::get('/generate-post', [BackController::class, 'generate_post'])->name('generate-post');
    Route::get('/post-index', PostIndex::class)->name('post-index');
    Route::get('/add-post', AddPost::class)->name('add-post');
    Route::get('/detail-post/{id}', PostDetail::class)->name('post-detail');
});
