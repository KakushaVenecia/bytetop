<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // Method to fetch all orders
    public function index()
    {
        $orders = Order::all();
        return response()->json(['orders' => $orders], 200);
    }

    // Method to fetch a specific order by its ID
    public function show($id)
    {
        $order = Order::findOrFail($id);
        return response()->json(['order' => $order], 200);
    }

    // Method to update an existing order
    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'customer_name' => 'required|string',
            // Add more validation rules as needed
        ]);

        // Find the order by its ID
        $order = Order::findOrFail($id);

        // Update the order
        $order->update([
            'customer_name' => $request->input('customer_name'),
            // Update other fields as needed
        ]);

        // Return the updated order
        return response()->json(['order' => $order], 200);
    }

    // Method to delete an order
    public function destroy($id)
    {
        // Find the order by its ID
        $order = Order::findOrFail($id);

        // Delete the order
        $order->delete();

        // Return success response
        return response()->json(['message' => 'Order deleted successfully'], 200);
    }
}