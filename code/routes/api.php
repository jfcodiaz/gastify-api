<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users\MeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegistrerController;
use App\Http\Controllers\Users\ListUsersController;

Route::post('/register', RegistrerController::class)->name('user.register');
Route::post('/login',LoginController::class)->name('user.login');

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', LogoutController::class)->name('user.logout');
    Route::get('/me', MeController::class)->name('user.me');
    Route::get('/users', ListUsersController::class)->name('user.list');
});
