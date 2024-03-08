<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;

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
            // Check if there's an incomplete order for the user
            $order = Order::where('user_id', $userId)->whereNull('completed_at')->first();

            if (!$order) {
                // If no incomplete order exists, create a new order
                $order = Order::create([
                    'user_id' => $userId,
                ]);


                // session(['current_order_id' => $order->id]);
            }

            $productId = $validatedData['product_id'];
            $quantity = $validatedData['quantity'];

            // Check if the product already exists in the cart for the current order
            $existingCartItem = Cart::where('order_id', $order->id)
                ->where('product_id', $productId)
                ->first();

            if ($existingCartItem) {
                // If the cart item already exists, update the quantity
                $existingCartItem->increment('quantity', $quantity);
            } else {
                // If the cart item does not exist, create a new one
                Cart::create([
                    'order_id' => $order->id,
                    'user_id' => $userId, // can be removed
                    'product_id' => $productId,
                    'quantity' => $quantity,
                ]);
            }

            // Update the cart count in the session or wherever you need it
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

    public function updateQuantity(Request $request)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'cart_item_id' => 'required|exists:carts,id',
            'quantity' => 'required|integer|min:1',
        ]);

        // Find the cart item
        $cartItem = Cart::findOrFail($validatedData['cart_item_id']);

        // Update the quantity
        $cartItem->update([
            'quantity' => $validatedData['quantity'],
        ]);

        $subtotal = $cartItem->product->price * $validatedData['quantity'];

        $cartItems = Cart::where('order_id', $cartItem->order_id)->get();
        $totalPrice = $cartItems->sum(function ($item) {
            return $item->product->price * $item->quantity;
        });

        
        $totalCount = $cartItems->sum(function ($item) {
            return $item->quantity;
        });

        return response()->json([
            'message' => 'Quantity updated successfully',
            'quantity' => $cartItem->quantity,
            'subtotal' => number_format($subtotal, 2), // Format subtotal as needed
            'total_price' => number_format($totalPrice, 2),
            'products_count' => $totalCount,
        ]);
    }


    public function subtotal()
    {
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
