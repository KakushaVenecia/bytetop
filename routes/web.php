<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasswordResetController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\VerificationController;

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

Route::get('/email/verify/', [VerificationController::class, 'verify'])->name('verification.verify');
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
Route::get('/signup', function(){
        return view('register-user');
});
Route::view('/checkmail', 'checkmail');


// Admin dashboard web routes
Route::get('/admin/dashboard', function () {
    // dd('Dashboard route reached', resource_path('views/admindashboard/dashboard.blade.php'));
    return view('admindashboard.dashboard');
})->name('dashboard');

Route::get('/admin/products/create', [ProductController::class, 'create'])->name('admin.products.create');

Route::view('/verify-success', 'verification.verify-success')->name('verification.success');

// Route to show the verification error view
Route::view('/verify-error', 'verification.verify-error')->name('verification.error');

Route::get('/about', function(){
    return view ('about');
});

Route::get('/search', function(){
    return view ('search');
});
