<?php

use App\Models\User;
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
use App\Http\Controllers\SearchController;
use App\Http\Controllers\product\ProductDetailsController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\AuthController;

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
Route::get('/', function () {
    //  'orderItem'==App\Models\OrderItem::count();
    return view('landing');
})->name('landing');

Route::get('/signup', function () {
    return view('register-user');
});

Route::get('/signin', function () {
    return view('login-user');
})->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('auth.login');

Route::view('/checkmail', 'checkmail');

// Admin dashboard web routes
Route::get('/dashboard', function () {
    return view('admin/dashboard');
})->name('dashboard');

Route::get('/admin/products/create', [ProductController::class, 'create'])->name('admin.products.create');
Route::post('/admin/products', [ProductController::class, 'store'])->name('admin.products.store');
Route::get('/admin/products/{id}/edit', [ProductController::class, 'edit'])->name('admin.products.edit');
Route::put('/admin/products/{id}', [ProductController::class, 'update'])->name('admin.products.update');
Route::delete('/admin/products/{id}', [ProductController::class, 'destroy'])->name('admin.products.destroy');
Route::get('/admin/dashboard', [ProductController::class, 'dashboard'])->name('dashboard');
Route::get('/get-product-description', [ProductController::class, 'getProductDescription'])->name('get-product-description');

// Verification
Route::view('/verify-success', 'verification.verify-success')->name('verification.success');
// Route to show the verification error view
Route::view('/verify-error', 'verification.verify-error')->name('verification.error');

Route::get('/verifyemail', function () {
    return view('verifyyouremail');
});

Route::get('/Search', function () {
    return view('search');
});

Route::post('/Search', [SearchController::class, 'findSearch']);

Route::get('/forgotpwd', function () {
    return view('forgotpwd');
});

Route::get('/checkmail', function () {
    return view('checkmail');
});

// from front end for integration
Route::get('/cartpage', function () {
    return view('cart');
});

Route::get('/products', function () {
    // Fetch all distinct categories from the products table
    $categories = ['Laptops', 'Computers', 'Accessories'];
    // Fetch distinct categories from the products table
    $distinctCategories = Product::distinct()->pluck('category');
    $products = Product::paginate(10);
    return view('productpage', compact('products'), ['categories' => $categories, 'distinctCategories' => $distinctCategories]);
});

Route::get('/product/{id}', [ProductDetailsController::class, 'show'])->name('product.show');
Route::post('/product/{productId}/reviews', [ReviewController::class, 'store'])->name('reviews.store');

Route::get('/register', function () {
    return view('register');
});

// CART for backend for integration with the cart pages on the front end
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
Route::get('/productpage', function () {
    // $products = Product::all();
    $products = Product::paginate(10);
    return view('shop', compact('products'));
});
Route::get('/about', function () {
    return view('about');
});

Route::group(['middleware' => 'auth'], function () {
    // Your protected routes here

    Route::get('/admin/dashboard', function () {
        $productCount = App\Models\Product::count();
        $products = Product::paginate(10);
        $users = App\Models\User::all();
        return view('admindashboard.dashboard', [
            'products' => $products,
            'productCount' => $productCount,
            'users' => $users
        ]);
    })->name('dashboard');
});

Route::middleware('web')->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
