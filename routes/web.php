<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasswordResetController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\VerificationController;
use App\Models\Product;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Models\Cart;

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

// basic nav pages
Route::get('/',function(){
//  'orderItem'==App\Models\OrderItem::count();
    return view('landing');
})->name('landing');

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
Route::get('/dashboard', function(){
    return view ('admin/dashboard');
});

Route::get('/admin/products/create', [ProductController::class, 'create'])->name('admin.products.create');




// Verification
Route::view('/verify-success', 'verification.verify-success')->name('verification.success');
// Route to show the verification error view
Route::view('/verify-error', 'verification.verify-error')->name('verification.error');


Route::get('/verifyemail', function(){

return view('verifyyouremail');
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

// from front end for intergration
Route::get('/cartpage', function(){
    return view ('cart');
});

Route::get('/checkout', function(){
    return view ('checkout');
});
Route::get('/products',function(){
     // Fetch all distinct categories from the products table
     $categories = ['Laptops', 'Computers', 'Accessories'];
     // Fetch distinct categories from the products table
    $distinctCategories = Product::distinct()->pluck('category');

    $products = Product::paginate(10);
    return view('productpage',  compact('products'),  ['categories' => $categories], ['distinctCategories' => $distinctCategories]);
});

Route::get('/register',function(){
    return view('register');
});

// CART for backend for integration wirh the cart pages on front end
Route::get('/cart', [CartController::class, 'index'])->name('shopping-cart');
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.addToCart');
Route::delete('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.removeFromCart');

// / Routes for order controller
Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');
Route::get('/orders/{id}', [OrderController::class, 'show'])->name('orders.show');
Route::put('/orders/{id}', [OrderController::class, 'update'])->name('orders.update');
Route::delete('/orders/{id}', [OrderController::class, 'destroy'])->name('orders.destroy');

// Routes for order item controller
Route::post('/orders/{order_id}/items', [OrderItemController::class, 'store'])->name('orderItems.store');
Route::put('/orders/{order_id}/items/{id}', [OrderItemController::class, 'update'])->name('orderItems.update');
Route::delete('/orders/{order_id}/items/{id}', [OrderItemController::class, 'destroy'])->name('orderItems.destroy');







// Landing page routes
Route::get('/productpage', function(){
    // $products = Product::all();
    $products = Product::paginate(10);
    return view('shop', compact('products'));
});
Route::get('/about', function(){
    return view ('about');
});
