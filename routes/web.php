<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Support\Facades\Route;

// TODO : change to polices later
//FIXME:
Route::get('/', [HomeController::class, 'index'])->middleware('verified', 'auth');

Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/publish', [PostController::class, 'store'])->name('publish');
Route::get('/profile', [ProfileController::class, 'index']);
Route::patch('/profile-edit', [ProfileController::class, 'update']);
Route::patch('/edit/{post}', [PostController::class, 'update']);
Route::delete('/delete/{post}', [PostController::class, 'destroy']);
Route::get('/search', [SearchController::class, 'show']);
Route::get('/userprofile/{user}', [UserProfileController::class, 'show']);
Route::post('/logout', [SessionController::class, 'destroy']);
