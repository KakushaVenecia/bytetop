<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->only('addToCart');
    }

    
    public function addToCart(Request $request)
    {dd(session()->all());
        // Validate the incoming request
        $validatedData = $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);
    
        // Check if the user is authenticated
        if (auth()->check()) {
            // Get the authenticated user's ID
            $userId = auth()->user()->id;
            dd(auth()->user());
            // Retrieve the product ID and quantity from the validated data
            $productId = $validatedData['product_id'];
            $quantity = $validatedData['quantity'];
            
            // Add the item to the cart
            Cart::create([
                'user_id' => $userId,
                'product_id' => $productId,
                'quantity' => $quantity,
            ]);
    
            return response()->json(['message' => 'Product added to cart successfully']);
        } else {
            // If the user is not authenticated, return a response indicating that they need to log in
            return response()->json(['error' => 'User is not authenticated. Please log in.'], 401);
        }
    }
    
    // Method to remove a product from the cart
    public function removeFromCart($id)
    {
        // Your logic to remove the product from the cart
    }
}