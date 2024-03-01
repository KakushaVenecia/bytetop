<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Models\Cart;

class CartController extends Controller
{
    public function addToCart(Request $request)
    { dd();
        return response()->json(['message' => 'Product added to cart successfully']);
    }

    // Method to remove a product from the cart
    public function removeFromCart($id)
    {
        // Your logic to remove the product from the cart
    }
}
