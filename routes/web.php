<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasswordResetController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\VerificationController;
use App\Models\Product;

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

Route::get('/dashboard', function(){
    return view ('admin/dashboard');
});
Route::get('/signup', function(){
        return view('register-user');
});

Route::get('/signin', function () {
    return view('login-user');
});


Route::view('/checkmail', 'checkmail');


// Admin dashboard web routes
Route::get('/admin/dashboard', function () {
    $productCount = App\Models\Product::count();
    return view('admindashboard.dashboard', [
        'productCount' => $productCount,
    ]);
})->name('dashboard');

Route::get('/admin/products/create', [ProductController::class, 'create'])->name('admin.products.create');

Route::view('/verify-success', 'verification.verify-success')->name('verification.success');

// Route to show the verification error view
Route::view('/verify-error', 'verification.verify-error')->name('verification.error');

Route::get('/verifyemail', function(){

return view('verifyyouremail');
});

Route::get('/about-us', function(){
    return view ('about');
});

Route::get('/search', function(){
    return view ('search');
});

Route::get('/products', function(){
    $products = Product::all();
    foreach ($products as $product) {
        // Output the image path for debugging
        echo $product->images . "<br>";
    }
    return view('shop', compact('products'));
});