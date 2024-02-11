<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function(){
    return view ('admin/dashboard');
});
Route::get('/about', function(){
    return view ('about');
});
Route::get('/search', function(){
    return view ('search');
});

Route::get('/forgotpwd', function(){
    return view ('forgotpwd');
});

Route::get('/checkmail', function(){
    return view ('checkmail');
});


Route::get('/basket', function(){
    return view ('basket');
});

Route::get('/checkout', function(){
    return view ('checkout');
});