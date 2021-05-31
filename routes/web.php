<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostLikeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserPostController;

Route::get('/', function () {
    return view('home');
})->name('home');;


Route::get('/dash', [DashboardController::class, 'index'])->name('dash');

Route::post('/sair', [LogoutController::class, 'store'])->name('sair');

Route::get('/Login', [LoginController::class, 'index'])->name('Login');
Route::post('/Login', [LoginController::class, 'store']);

Route::get('/registra', [RegisterController::class, 'index'])->name('registrar');
Route::post('/registra', [RegisterController::class, 'store']);

Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::post('/posts', [PostController::class, 'store']);
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::post('/posts/{post}/likes', [PostLikeController::class, 'store'])->name('posts.likes');
Route::delete('/posts/{post}/likes', [PostLikeController::class, 'destroy'])->name('posts.likes');

Route::get('/users/{user:username}/posts', [UserPostController::class, 'index'])->name('user.posts');
