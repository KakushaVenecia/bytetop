<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\ProductDetail;
use Illuminate\Database\QueryException;

class CartController extends Controller
{public function addToCart(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'product_name' => 'required|string', 
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
        ]);
    
        try {
            // Ensure the user is authenticated
            if (!auth()->check()) {
                return redirect()->route('login')->with('error', 'You need to login first.');
            }
            
            // Retrieve validated data
            $productName = $request->input('product_name');
            $quantity = $request->input('quantity');
            $price = $request->input('price');
    
            // Create a new cart item
            Cart::create([
                'name' => $productName,
                'quantity' => $quantity,
                'price' => $price,
                'user_id' => auth()->id(), // Get the authenticated user's ID
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
    


    public function getCartCount()
    {
        $userId = session('user_id');
      
        if ($userId) {
            $cartCount = Cart::where('user_id', $userId)->count();
            return $cartCount > 0 ? $cartCount : '';
        }
    
        return ''; 
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
        $cartItem = Cart::find($id);



        // Check if the cart item exists
        if ($cartItem) {
            // Delete the cart item
            $cartItem->delete();

            $cartItems = Cart::where('order_id', $cartItem->order_id)->get();
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
}
