<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);
    
        // Retrieve the user ID from the session
        $userId = session('user_id');
    
        // Check if the user ID is available
        if ($userId) {
            // Check if the product already exists in the cart
            if (Cart::where('user_id', $userId)->where('product_id', $validatedData['product_id'])->exists()) {
                return response()->json(['error' => 'Item already in cart']);
            }
    
            // Proceed to add the item to the cart
            Cart::create([
                'user_id' => $userId,
                'product_id' => $validatedData['product_id'],
                'quantity' => $validatedData['quantity'],
            ]);
    
            // Update the cart count in the session
            $cartCount = $this->getCartCount();
            session(['cart_count' => $cartCount]);
    
            return response()->json(['message' => 'Product added to cart successfully', 'cart_count' => $cartCount]);
        } else {
            // If the user ID is not found in the session, return a response indicating that they need to log in
            return response()->json(['error' => 'User is not authenticated. Please log in.'], 401);
        }
    }
    

    protected function getCartCount()
    {
        $userId = session('user_id');
        return Cart::where('user_id', $userId)->count();
    }

    protected function getCartItems() {
        $cartItems = [];
    
        // Check if the user is authenticated and retrieve cart items
        if (auth()->check()) {
            $userId = auth()->id();
    
            // Retrieve cart items from session (if any)
            if (session()->has('cart_items')) {
                $cartItems = session('cart_items');
            }
    
            // Retrieve cart items from the database and merge them with session items
            $dbCartItems = Cart::where('user_id', $userId)->get();
            $cartItems = $cartItems->merge($dbCartItems);
        } else {
            // If the user is not authenticated, retrieve cart items from the session only
            if (session()->has('cart_items')) {
                $cartItems = session('cart_items');
            }
        }
    
        return $cartItems;
    }

    // Method to remove a product from the cart
    public function removeFromCart($id)
    {
        // Your logic to remove the product from the cart
    }
}
