<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\VerificationController;
use App\Models\Product;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Models\Cart;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\RegController;
use App\Http\Controllers\ShippingAddressController;
use App\Http\Controllers\API\InviteController;
use App\Http\Controllers\PasswordResetController;
use App\Http\Controllers\product\ProductDetailsController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;

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

Route::get('/verify-email', [VerificationController::class, 'verify'])->name('verification.verify');

// basic nav pages
Route::get('/', function () {
    //  'orderItem'==App\Models\OrderItem::count();
    return view('landing');
})->name('landing');




// REGISTER 
Route::get('/register', [RegController::class, 'showRegistrationForm'])->name('register');
Route::post('/tosignin', [RegController::class, 'register'])->name('tosignin');
Route::get('/login', [RegController::class, 'showLoginForm'])->name('login');
Route::post('/tologin', [RegController::class, 'login'])->name('tologin');
Route::post('/logout', [RegController::class, 'logout'])->name('tologout');
Route::get('/forgotpwd', function () {
    return view('forgotpwd');
});


Route::post('/forgot-password', [RegController::class, 'sendResetLinkEmail'])->name('forgot-password');

// Route::get('password/reset', [RegController::class, 'showLinkRequestForm'])->name('password.request');
// Route::post('password/email', [RegController::class, 'sendResetLinkEmail'])->name('password.email');
// Route::get('password/reset/{token}', [RegController::class, 'showResetForm'])->name('password.reset');
// Route::post('password/reset', [RegController::class, 'reset'])->name('password.update');

Route::get('/forgot-password', function () {
    return view('forgotpwd');
})->middleware('guest')->name('password.request');

Route::post('/forgot-password', [PasswordResetController::class, 'sendResetLinkEmail'])
    ->middleware('guest')
    ->name('password.email');

Route::get('/reset-password/{token}', [PasswordResetController::class, 'showResetForm'])
    ->middleware('guest')
    ->name('password.reset');

Route::post('/reset-password', [PasswordResetController::class, 'resetPassword'])
    ->middleware('guest')
    ->name('password.update');


// Delete these views



Route::get('/signup', function () {
    return view('register-user');
});

Route::post('/update-password', [UserController::class, 'updatePassword'])->name('update.password');



Route::view('/checkmail', 'checkmail');
Route::get('/checkmail', function () {
    return view('checkmail');
});


Route::get('/admin/products/create', [ProductController::class, 'create'])->name('admin.products.create');
Route::post('/admin/products', [ProductController::class, 'store'])->name('admin.products.store');
Route::get('/admin/products/{id}/edit', [ProductController::class, 'edit'])->name('admin.products.edit');
Route::put('/admin/products/{id}', [ProductController::class, 'update'])->name('admin.products.update');
Route::delete('/admin/products/{id}', [ProductController::class, 'destroy'])->name('admin.products.destroy');
Route::get('/admin/dashboard', [ProductController::class, 'dashboard'])->name('dashboard');
Route::get('/get-product-description', [ProductController::class, 'getProductDescription'])->name('get-product-description');
Route::get('/get-product-quantity', [ProductController::class, 'getStockQuantity'])->name('get-product-quantity');
Route::get('/admin/allproducts', [ProductController::class, 'allproducts'])->name('admin.viewproducts');
Route::get('/admin/all-users', [ProductController::class, 'getallusers'])->name('admin.viewusers');
// Route::get('/admin/allproducts' , function(){
//     return view ('admindashboard.products');
// })->name('admin.viewproducts');

Route::get('/admin/all-users' , function(){
    return view ('admindashboard.users');
})->name('admin.viewusers');

Route::get('/admin/all-orders' , function(){
    return view ('admindashboard.orders');
})->name('admin.vieworders');

Route::get('/admin/settings' , function(){
    return view ('admindashboard.settings');
})->name('admin.viewsettings');

Route::get('/admin/notifications' , function(){
    return view ('admindashboard.notifications');
})->name('admin.viewnotifications');

Route::get('/admin/reports' , function(){
    return view ('admindashboard.reports');
})->name('admin.viewreports');











// Verification
Route::view('/verify-success', 'verification.verify-success')->name('verification.success');
Route::view('/verify-error', 'verification.verify-error')->name('verification.error');
Route::get('/verifyemail', function () {
    return view('verifyyouremail');
});


Route::get('/Search', function () {
    return view('search');
});
Route::post('/Search', [SearchController::class, 'findSearch']);




Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/Laptops', [ProductDetailsController::class, 'getLaptops'])->name('Laptops');
Route::get('/Computers', [ProductDetailsController::class, 'getComputers'])->name('Computers');
Route::get('/Accessories', [ProductDetailsController::class, 'getAccessories'])->name('Accessories');
Route::get('/Monitors', [ProductDetailsController::class, 'getMonitors'])->name('Monitors');
Route::get('/All-in-one', [ProductDetailsController::class, 'getAllInOne'])->name('All-in-one');

Route::get('/products', function () {
    // Fetch all distinct categories from the products table
    // $categories = ['Laptops', 'Computers', 'Laptop Accessories', 'All in One Desktops', 'Computer Monitors'];

    // Fetch distinct categories from the products table
    // $distinctCategories = Product::distinct()->pluck('category');


    // $productCount = Product::count();

    // // Get unique product names
    // $uniqueProductNames = Product::distinct()->pluck('name');

    // $productCounts = [];
    // foreach ($uniqueProductNames as $name) {
    //     $count = Product::where('name', $name)->count();
    //     $productCounts[$name] = $count;
    // }
    // $products = [];
    // foreach ($uniqueProductNames as $name) {
    //     $product = Product::where('name', $name)->first();
    //     $products[] = $product;
    // }

    // dd($uniqueProductNames); // Debugging statement

    // return view('productpage', compact('products', 'categories', 'distinctCategories', 'productCounts', 'uniqueProductNames'));
    return view ('productpage');
});
// Define route for showing product details
Route::get('/products/{id}', [ProductDetailsController::class, 'show'])->name('products.show');
// Routes for submitting reviews and showing product details
Route::post('/product/{productId}/review', [ReviewController::class, 'store'])->name('product.review.store');
Route::post('/review/{reviewId}/reply', [ReviewController::class, 'reply'])->name('product.review.reply');
Route::get('/product/{productId}', [ProductDetailsController::class, 'show'])->name('product.show');

// CART ROUTE
Route::get('/cartpage', function () {
    $userId = auth()->id();
    $cartItems = Cart::where('user_id', $userId)->get();

    // Iterate over each cart item and fetch the corresponding product details
    foreach ($cartItems as $cartItem) {
        // Retrieve the product details based on the product ID in the cart item
        $product = Product::find($cartItem->product_id);

        // Assign the product price to the cart item
        $cartItem->price = $product->price;
    }
    return view('cart', ['cartItems' => $cartItems]);
});

Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart/count', [CartController::class, 'getCartCount'])->name('cart.count');
Route::get('/cart/subtotal', [CartController::class, 'subtotal'])->name('subtotal');
Route::post('/cart/update', [CartController::class, 'updateQuantity'])->name('cart.update');



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


// Route for submitting the shipping address form
Route::post('/shipping-address', [ShippingAddressController::class, 'store'])->name('shipping-address.store');


// Landing page routes
Route::get('/productpage', function () {
    // $products = Product::all();
    $products = Product::paginate(10);
    return view('shop', compact('products'));
});
Route::get('/about', function () {
    return view('about');
});



Route::get('/ordersuccess', function () {
    return view('ordersuccess');
});

Route::get('/account', function () {
    return view('account');
});


Route::get('/orderspage', function () {
    return view('orderspage');
});


Route::get('/trackorder', function () {
    return view('trackorder');
});

Route::get('/verifynumber', function () {
    return view('verifynumber');
});


Route::post('/admin/invite', [InviteController::class, 'invite'])->name('invite.send');
Route::get('/admin/invite', function () {
    return view('admindashboard.invite');
})->name('admin.invite.form');
Route::get('/contactus', function(){
    return view ('contactus');
});
