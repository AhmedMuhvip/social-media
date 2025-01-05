<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/publish', [PostController::class, 'store'])->name('publish');
Route::get('/profile', [ProfileController::class, 'index']);
Route::patch('/profile-edit', [ProfileController::class, 'update']);
Route::post('/logout', [SessionController::class, 'destroy']);
