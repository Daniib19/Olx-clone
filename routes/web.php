<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;

Route::get('/', [HomeController::class, 'home']);

Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'login_post']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/register', [LoginController::class, 'register']);
Route::post('/register', [LoginController::class, 'register_post']);

Route::get('/user', [UserController::class, 'home']);

