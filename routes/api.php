<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasswordResetController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\RegisterController;
// product routes
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/allproducts', [ProductController::class, 'index']);
Route::patch('/products', [ProductController::class, 'edit'])->name('');



Route::post('/register', [RegisterController::class, 'regist'])->name('auth.register');
Route::post('api/login', [AuthController::class, 'login']);
Route::post('api/logout', [AuthController::class, 'logout']);
Route::post('api/refresh', [AuthController::class, 'refresh']);
Route::post('api/me', [AuthController::class, 'me']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::group([
//     'middleware'=> 'api',
// ], function ($router){
//     Route::post('register', [AuthController::class, 'register']);
//     Route::post('login', [AuthController::class, 'login']);
//     Route::post('logout', [AuthController::class, 'logout']);
//     Route::post('refresh', [AuthController::class, 'refresh']);
//     Route::post('me', [AuthController::class, 'me']);
    
// });


