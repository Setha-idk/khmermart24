<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);

Route::get('/user', [PageController::class, 'user']);
Route::get('/register', [PageController::class, 'register']);
Route::post('/register', [PageController::class, 'store']);