<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasswordResetController;




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
Route::get('/register',function(){
    return view('register');
});
Route::get('/login',function(){
    return view('login');
});
Route::get('/dashboard', function(){
    return view ('dashboard');
});
Route::get('/about', function(){
    return view ('about');
});

Route::get('/forgot-password', [PasswordResetController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/forgot-password', [PasswordResetController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/reset-password/{token}', [PasswordResetController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [PasswordResetController::class, 'reset']);
