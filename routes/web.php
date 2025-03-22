<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\FriendController;
use App\Http\Controllers\FriendRequestController;
use App\Http\Controllers\FriendRequestStatusController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserProfileController;

// TODO : change to polices later
//FIXME:
Route::get('/', [HomeController::class, 'index'])->middleware('verified', 'auth');

Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);

Route::post('/publish', [PostController::class, 'store'])->name('publish');

Route::get('/profile', [ProfileController::class, 'index']);
Route::patch('/profile-edit', [ProfileController::class, 'update']);

Route::patch('/edit/{post}', [PostController::class, 'update']);
//Route::patch('/edit/{post}', [PostController::class, 'update'])->middleware('auth', 'can:delete-post,post');
Route::delete('/delete/{post}', [PostController::class, 'destroy'])->middleware('auth')->can('edit,post');

Route::get('/search', [SearchController::class, 'show']);

Route::get('/userprofile/{user}', [UserProfileController::class, 'show']);

Route::get('/friend-request/{id}', [FriendRequestStatusController::class, 'store']);
Route::get('/friend-request', [FriendRequestStatusController::class, 'show']);

Route::get('/friend/confirm/{request_id}', [FriendRequestController::class, 'confirm']);
Route::get('/friend/decline/{request_id}', [FriendRequestController::class, 'decline']);
Route::get('/friends', [FriendController::class, 'show']);
Route::get('/friend/delete/{id}', [FriendController::class, 'destroy']);

Route::post('/post/{post_id}/comment', [CommentController::class, 'store']);
Route::get('/post/{id}/like', [LikeController::class, 'store']);


//Route::get('/login', [SessionController::class, 'create'])->name('login');
//Route::post('/login', [SessionController::class, 'store']);
//Route::get('/register', [RegisteredUserController::class, 'create']);
//Route::post('/register', [RegisteredUserController::class, 'store']);
//
//Route::middleware(['auth', 'verified'])->group(function () {
//    Route::get('/', [HomeController::class, 'index']);
//    Route::post('/logout', [SessionController::class, 'destroy']);
//
//    Route::post('/publish', [PostController::class, 'store'])->name('publish');
//
//    Route::get('/profile', [ProfileController::class, 'index']);
//    Route::patch('/profile-edit', [ProfileController::class, 'update']);
//
//    Route::patch('/edit/{post}', [PostController::class, 'update']);
//    Route::delete('/delete/{post}', [PostController::class, 'destroy']);
//
//    Route::get('/search', [SearchController::class, 'show']);
//
//    Route::get('/userprofile/{user}', [UserProfileController::class, 'show']);
//
//    Route::get('/friend-request/{id}', [FriendRequestStatusController::class, 'store']);
//    Route::get('/friend-request', [FriendRequestStatusController::class, 'show']);
//
//    Route::get('/friend/confirm/{request_id}', [FriendRequestController::class, 'confirm']);
//    Route::get('/friend/decline/{request_id}', [FriendRequestController::class, 'decline']);
//    Route::get('/friends', [FriendController::class, 'show']);
//
//    Route::post('/post/{post_id}/comment', [CommentController::class, 'store']);
//    Route::get('/post/{id}/like', [LikeController::class, 'store']);
//});
