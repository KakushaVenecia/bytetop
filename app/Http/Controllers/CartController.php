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
            // session(['cart_count' => $cartCount]);
    
            return response()->json(['message' => 'Product added to cart successfully', 'cart_count' => $cartCount]);
        } else {
            // If the user ID is not found in the session, return a response indicating that they need to log in
            return response()->json(['error' => 'User is not authenticated. Please log in.'], 401);
        }
    }
    

    public function getCartCount()
{
    $userId = session('user_id');

    if ($userId) {
        $cartCount = Cart::where('user_id', $userId)->count();
        return response()->json(['cart_count' => $cartCount]);
    }

    return response()->json(['cart_count' => '']);
}


public function subtotal(){
    $userId = session('user_id');

      // Initialize subtotal variable
      $subtotal = 0;

      if ($userId) {
          // Retrieve the items in the user's cart
          $cartItems = Cart::where('user_id', $userId)->get();

              // Loop through each item in the cart
        foreach ($cartItems as $item) {
            // Calculate subtotal for each item (price * quantity) and add to total
            $subtotal += $item->price * $item->quantity;
            // $totalItems += $item->quantity;
        }
}
// Pass the subtotal to the view
return view('cart', ['subtotal' => $subtotal]);
}

    public function removeFromCart($id)
    {
        // Your logic to remove the product from the cart
    }
}
