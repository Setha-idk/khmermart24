<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);

Route::get('/user', [PageController::class, 'user']);
Route::get('/register', [PageController::class, 'register']);
Route::post('/register', [PageController::class, 'store']);