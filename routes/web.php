<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasswordResetController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/',function(){
    return view('landing');
});
Route::get('/login',function(){
    return view('login');
});
Route::get('/dashboard', function(){
    return view ('dashboard');
});

Route::get('/dashboard', function(){
    return view ('admin/dashboard');
});
Route::get('/signup', [RegisterController::class, 'signin']);



// Admin dashboard web routes
Route::get('/admin/dashboard', function () {
    // dd('Dashboard route reached', resource_path('views/admindashboard/dashboard.blade.php'));
    return view('admindashboard.dashboard');
})->name('dashboard');

Route::get('/admin/products/create', [ProductController::class, 'create'])->name('admin.products.create');





Route::get('/about', function(){
    return view ('about');
});

Route::get('/search', function(){
    return view ('search');
});
Route::get('/productpage',function(){
    return view('productpage');
});

Route::get('/register',function(){
    return view('register');
});