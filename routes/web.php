<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackController;
use App\Http\Controllers\FrontController;
use App\Http\Livewire\PostIndex;
use App\Http\Livewire\AddPost;
use App\Http\Livewire\PostDetail;

Route::group(['prefix' => '/'], function () {
    Route::get('/', [FrontController::class, 'home'])->name('home-page');
});

Route::get('/login', [BackController::class, 'login'])->name('login');
Route::post('/login', [BackController::class, 'post_login'])->name('post-login');
Route::post('/logout', [BackController::class, 'logout'])->name('logout');

Route::group(['prefix' => '/dashboard', 'middleware' => 'cek-auth'], function () {
    // GET METHOD
    Route::get('/', [FrontController::class, 'index'])->name('dashboard');
    Route::get('/generate-post', [BackController::class, 'generate_post'])->name('generate-post');
    Route::get('/post-index', PostIndex::class)->name('post-index');
    Route::get('/add-post', AddPost::class)->name('add-post');
    Route::get('/post-edit/{id}', [BackController::class, 'edit_post'])->name('post-edit');
    Route::get('/post-detail/{id}', [BackController::class, 'detail_post'])->name('post-detail');

    // POST METHOD
    Route::post('/post-delete/{id}', [BackController::class, 'delete_post'])->name('post-delete');
});
