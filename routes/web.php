<?php

use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\API\InviteController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\product\ProductDetailsController;
use App\Http\Controllers\RegController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ShippingAddressController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VerificationController;
use App\Models\Message;
use App\Models\OrderItem;
use App\Models\Payment;
use App\Models\Product;
use App\Models\User;
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

Route::get('/verify-email', [VerificationController::class, 'verify'])->name('verification.verify');

Route::get('/', [ProductController::class, 'landing'])->name('landing');

Route::get('/blog', function () {
    return view('blog');
});

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
Route::get('password/reset', [RegController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [RegController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [RegController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [RegController::class, 'reset'])->name('password.update');

Route::get('/signup', function () {
    return view('register-user');
});

Route::post('/update-password', [UserController::class, 'updatePassword'])->name('update.password');

Route::get('/admin/products/create', [ProductController::class, 'create'])->name('admin.products.create')->middleware('super_admin')->middleware('auth');
Route::post('/admin/products', [ProductController::class, 'store'])->name('admin.products.store')->middleware('super_admin')->middleware('auth');
Route::get('/admin/products/{id}/edit', [ProductController::class, 'edit'])->name('admin.products.edit')->middleware('super_admin')->middleware('auth');
Route::put('/admin/products/{id}', [ProductController::class, 'update'])->name('admin.products.update')->middleware('super_admin')->middleware('auth');
Route::delete('/admin/products/{id}', [ProductController::class, 'destroy'])->name('admin.products.destroy')->middleware('super_admin')->middleware('auth');
Route::get('/admin/dashboard', [ProductController::class, 'dashboard'])->name('dashboard')->middleware('super_admin')->middleware('auth');
Route::get('/admindash', [ProductController::class, 'admindashboard'])->name('admindash')->middleware('admin')->middleware('auth');

Route::get('/get-product-description', [ProductController::class, 'getProductDescription'])->name('get-product-description');
Route::get('/get-product-quantity', [ProductController::class, 'getStockQuantity'])->name('get-product-quantity');
Route::get('/admin/allproducts', [ProductController::class, 'allproducts'])->name('admin.viewproducts')->middleware('super_admin')->middleware('auth');

// Define the route for deleting a user
Route::delete('/admin/user/{user}', [AdminUserController::class, 'deleteUser'])->name('admin.deleteuser')->middleware('super_admin')->middleware('auth');

Route::get('/admin/all-users', function () {
    $users = User::all();

    return view('admindashboard.users', compact('users'));
})->middleware(['super_admin', 'auth'])->name('admin.viewusers');

Route::get('/admin/all-orders', function () {
    $orders = OrderItem::paginate(7);
    $orderCount = OrderItem::count();

    return view('admindashboard.orders', compact('orders', 'orderCount'));
})->name('admin.vieworders')->middleware(['super_admin', 'auth']);


Route::put('/admin/orders/{order}', [OrderItemController::class, 'approve'])->name('order.approve')->middleware(['admin', 'super_admin']);

Route::get('/admin/settings', function () {
    return view('admindashboard.settings');
})->name('admin.viewsettings');

Route::get('/admin/notifications', function () {
    $messages = Message::all();

    return view('admindashboard.notifications', compact('messages'));
})->name('admin.viewnotifications');

Route::get('/messages/fetch', [ContactController::class, 'fetch'])->name('messages.fetch');

Route::get('/admin/reports', function () {
    return view('admindashboard.reports')->middleware('super_admin')->middleware('auth');
})->name('admin.viewreports');

// Verification
Route::view('/verify-success', 'verification.verify-success')->name('verification.success');
Route::view('/verify-error', 'verification.verify-error')->name('verification.error');
Route::get('/verifyemail', function () {
    return view('verifyyouremail');
})->name('verifyyouremail');

// Route::get('/Search', function () {return view('Search');});
Route::post('/Search', [SearchController::class, 'findSearch'])->name('search');

Route::get('/checkout', [CheckoutController::class, 'showCheckoutForm'])->name('checkout');
Route::post('/checkout', [CheckoutController::class, 'initiateOrder'])->name('initiate');

Route::get('/Laptops', [ProductDetailsController::class, 'getLaptops'])->name('Laptops');
Route::get('/Computers', [ProductDetailsController::class, 'getComputers'])->name('Computers');
Route::get('/Accessories', [ProductDetailsController::class, 'getAccessories'])->name('Accessories');
Route::get('/Monitors', [ProductDetailsController::class, 'getMonitors'])->name('Monitors');
Route::get('/All-in-one', [ProductDetailsController::class, 'getAllInOne'])->name('All-in-one');

// Define route for showing product details
Route::get('/products/{id}', [ProductDetailsController::class, 'show'])->name('products.show');

// Routes for submitting reviews and showing product details
Route::post('/product/{productId}/review', [ReviewController::class, 'store'])->name('product.review.store')->middleware('auth');
Route::post('/review/{reviewId}/reply', [ReviewController::class, 'reply'])->name('product.review.reply')->middleware('auth');
Route::get('/product/{productId}', [ProductDetailsController::class, 'show'])->name('product.show');

Route::get('/cartpage', [CartController::class, 'index'])->name('cart')->middleware('auth');
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add')->middleware('auth');
Route::get('/cart/count', [CartController::class, 'getCartCount'])->name('cart.count');
Route::get('/cart/subtotal', [CartController::class, 'subtotal'])->name('subtotal');
Route::post('/cart/update', [CartController::class, 'updateQuantity'])->name('cart.update')->middleware('auth');
Route::delete('/cart/{id}', [CartController::class, 'destroy'])->name('cart.delete');

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
Route::post('/shipping-address', [ShippingAddressController::class, 'store'])->name('shipping-address.store')->middleware('auth');

Route::post('/create-order', [OrderItemController::class, 'create'])->name('createorder');

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
})->name('ordersuccess');

Route::get('/orderspage', function () {
    $user = Auth::user();
    $orders = OrderItem::where('user_id', $user->id)->get();

    return view('orderspage', compact('orders'));
})->name('orderspage');


Route::get('/trackorder', function () {
    return view('trackorder');
})->name('trackorder')->middleware('auth');

Route::get('/verifynumber', function () {
    return view('verifynumber');
});

Route::post('/admin/invite', [InviteController::class, 'invite'])->name('invite.send');
Route::get('/admin/invite', function () {
    return view('admindashboard.invite');
})->name('admin.invite.form')->middleware('super_admin')->middleware('auth');

Route::get('/contactus', [ContactController::class, 'index'])->name('contact.us');

// PAYMENT ROUTES

Route::get('/account', function () {
    $userId = auth()->id();
    $paymentCards = Payment::where('user_id', $userId)->get();

    return view('account', compact('paymentCards'));
})->middleware('auth');
Route::post('/payments', [PaymentController::class, 'store'])->name('add-card-btn')->middleware('auth');

Route::post('/message', [ContactController::class, 'store'])->name('contact.store');
Route::get('/speak-to-us', function () {
    return view('speak-to-us');
});
