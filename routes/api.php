<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ProductController;









// Route::post('/products', [ProductController::class, 'store'])->name('products.store');


Route::patch('/products/{id}', [ProductController::class, 'update'])->name('products.update');

Route::get('/allproducts', [ProductController::class, 'index']);


