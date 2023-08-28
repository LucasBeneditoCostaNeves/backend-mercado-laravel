<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::post('/users', [UserController::class, 'create']);
Route::get('/users', [UserController::class, 'capturing']);

Route::post('/products', [ProductsController::class, 'create']);
Route::get('/products', [ProductsController::class, 'capturing']);

Route::post('/auth/login', [AuthController::class, 'login']);
Route::middleware('jwt.verify')->group(function () {
    Route::post('/users/cart', [UserController::class, 'createCart']);
    Route::get('/users/cart', [UserController::class, 'capturingCart']);
});
Route::post('/users/cart/test', [UserController::class, 'deleteCart']);
