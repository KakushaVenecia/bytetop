<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasswordResetController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\RegisterController;


// product routes


// Basic login and out 
Route::post('/register', [RegisterController::class, 'regist'])->name('auth.register');
Route::post('/login', [RegisterController::class, 'loginUser'])->name('auth.login');
Route::post('logout', [AuthController::class, 'logout']);
Route::post('refresh', [AuthController::class, 'refresh']);
Route::post('me', [AuthController::class, 'me']);


// Route::post('api/logout', [AuthController::class, 'logout']);
// Route::post('api/refresh', [AuthController::class, 'refresh']);
// Route::post('api/me', [AuthController::class, 'me']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});




Route::post('/products', [ProductController::class, 'store'])->name('products.store');

Route::patch('/products', [ProductController::class, 'edit'])->name('');

Route::get('/allproducts', [ProductController::class, 'index']);


