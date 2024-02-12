<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;


class CartController extends Controller
{
    public function index()
    {
        // Retrieve the user's cart items
        $cartItems = Cart::with('product')->where('user_id', auth()->id())->get();
        
        // Calculate the total number of items in the cart
        $cartItemCount = $cartItems->sum('quantity');

        return view('shopping-cart',  [
            'cartItems' => $cartItems,
            'cartItemCount' => $cartItemCount,
        ]);
    }

    public function addToCart(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|numeric|min:1'
        ]);

        // Add the product to the cart
        Cart::create([
            'user_id' => auth()->id(),
            'product_id' => $request->input('product_id'),
            'quantity' => $request->input('quantity')
        ]);

        return redirect()->route('shopping-cart')->with('success', 'Product added to cart successfully');
    }

    public function removeFromCart($id)
    {
        // Remove the item from the cart
        Cart::where('id', $id)->delete();

        return redirect()->route('shopping-cart')->with('success', 'Product removed from cart successfully');
    }
}
