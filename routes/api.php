<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\RegisterController;




// Route::post('/register', [RegisterController::class, 'regist'])->name('auth.register');
// Route::post('/login', [RegisterController::class, 'loginUser'])->name('auth.login');
Route::post('logout', [RegisterController::class, 'logout']);
Route::post('refresh', [RegisterController::class, 'refresh']);
Route::post('me', [RegisterController::class, 'me']);




// Route::post('/products', [ProductController::class, 'store'])->name('products.store');

Route::patch('/products/{id}', [ProductController::class, 'update'])->name('products.update');

Route::get('/allproducts', [ProductController::class, 'index']);


