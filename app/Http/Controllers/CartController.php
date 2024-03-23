<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\ProductDetail;
use App\Models\Product;
use Illuminate\Database\QueryException;

class CartController extends Controller {

public function addToCart(Request $request)
{ 
    // Validate the incoming request
    $request->validate([
        'product_name' => 'required|string', 
        'product_quantity' => 'required|integer|min:1',
        'product_price' => 'required|numeric|min:0',
    ]);

    try {
        // Retrieve the user from the session
        $user = session()->get('user');
        if (!$user || !$user->id) {
            if (!auth()->check()) {
                return redirect()->route('login')->with('error', 'You need to login first.');
            }
            $userId = auth()->id();
        } else {
            $userId = $user->id;
        }

        // Retrieve validated data
        $productName = $request->input('product_name');
        $quantity = $request->input('product_quantity'); // Corrected input name
        $price = $request->input('product_price'); // Corrected input name

        // Create a new cart item
        Cart::create([
            'name' => $productName,
            'quantity' => $quantity,
            'price' => $price,
            'user_id' => $userId,
        ]);

      
        // Redirect the user back to the previous page with success message
        return redirect()->back()->with('success', 'Product added to cart successfully.');
    } catch (\Exception $e) {
        // Log the exception for debugging
        logger()->error('Failed to add product to cart: ' . $e->getMessage());

        // Redirect the user back to the previous page with error message
        return redirect()->back()->with('error', 'Failed to add product to cart. Please try again later.');
    }
}


public function index()
{
    $userId = auth()->id();
    $cartItems = Cart::where('user_id', $userId)->get();
    $subtotal = 0; // Initialize $subtotal variable
    $productQuantities = []; // Initialize array to store product quantities

    // Iterate over each cart item and fetch the corresponding product details
    foreach ($cartItems as $cartItem) {
        // Retrieve the product details based on the product name in the cart item
        $productName = $cartItem->name;
        $quantity = Product::where('name', $productName)->count();
        $productQuantities[$productName] = $quantity;
        $productCount = Product::where('name', $productName)->count();
        
        // Store the count of products in the cart item
        $cartItem->product_count = $productCount;
        // Retrieve the product details based on the product name in the cart item
        $product = ProductDetail::where('name', $productName)->first();

        if ($product) {
            // Assign the product price to the cart item
            $cartItem->price = $product->price;
            // Assign the product quantity to the cart item
            $cartItem->product_quantity = $product->quantity; // Product quantity from ProductDetail model
            // Assign the image to the cart item
            $cartItem->image = $product->image; // Assuming 'image' is a field in the ProductDetail model

            // Optionally, you can calculate the upper bound for the increment counter using both quantities
            $cartItem->max_quantity = min($cartItem->quantity, $product->quantity);
        } else {
            // If product details not found, you may handle it accordingly (e.g., remove the cart item)
            $cartItem->delete(); // Delete the cart item if product details not found
        }
        
        // Calculate subtotal based on cart items
        $subtotal += $cartItem->quantity * $cartItem->price;
    }

    return view('cart', ['cartItems' => $cartItems, 'subtotal' => $subtotal, 'productQuantities' => $productQuantities]);
}
    


// public function subtotal(){

//     $userId = session('user_id');

//         // Initialize subtotal variable
//         $subtotal = 0;

//         if ($userId) {
//             // Retrieve the items in the user's cart
//             $cartItems = Cart::where('user_id', $userId)->get();

//             // Loop through each item in the cart
//             foreach ($cartItems as $item) {
//                 // Calculate subtotal for each item (price * quantity) and add to total
//                 $subtotal += $item->price * $item->quantity;
//                 // $totalItems += $item->quantity;
//             }
//         }
//         // Pass the subtotal to the view
//         return view('cart', ['subtotal' => $subtotal]);
//     }

    public function removeFromCart($id)
    {
        $cartItem = Cart::find($id);

        // Check if the cart item exists
        if ($cartItem) {
            // Delete the cart item
            $cartItem->delete();
            $cartItems = Cart::where('order_id')->get();
            $totalPrice = $cartItems->sum(function ($item) {
                return $item->product->price * $item->quantity;
            });

            $totalCount = $cartItems->sum(function ($item) {
                return $item->quantity;
            });

            return response()->json([
                'message' => 'Product removed from cart successfully.',
                'total_price' => number_format($totalPrice, 2),
                'count' => $totalCount,
            ]);
        }
    }
    public function destroy($id)
{
    // Find the cart item by its ID
    $cartItem = Cart::findOrFail($id);

    // Delete the cart item
    $cartItem->delete();

    // Redirect back or to any other route after deletion
    return redirect()->back()->with('success', 'Cart item deleted successfully.');
}
}
