<?php

namespace App\Http\Controllers;

    use App\Models\Order;
    use App\Models\OrderItem;
    use Illuminate\Http\Request;
    
    class OrderItemController extends Controller
    { 
        // Other methods...
    
        public function create(Request $request){
            dd($request);
            return view('ordersuccess');
        }
        public function update(Request $request, $order_id, $id)
        {
            // Validate the request data
            $request->validate([
                'product_id' => 'required|integer',
                'quantity' => 'required|integer|min:1',
                'price' => 'required|numeric|min:0',
                // Add more validation rules as needed
            ]);
    
            // Find the order
            $order = Order::findOrFail($order_id);
    
            // Find the order item within the order
            $orderItem = OrderItem::where('order_id', $order->id)->findOrFail($id);
    
            // Update the order item
            $orderItem->update([
                'product_id' => $request->input('product_id'),
                'quantity' => $request->input('quantity'),
                'price' => $request->input('price'),
            ]);
    
            // Return the updated order item
            return response()->json(['order_item' => $orderItem], 200);
        }
    
    
        public function destroy($order_id, $id)
        {
            // Find the order
            $order = Order::findOrFail($order_id);
    
            // Find the order item within the order
            $orderItem = OrderItem::where('order_id', $order->id)->findOrFail($id);
    
            // Delete the order item
            $orderItem->delete();
    
            // Return success response
            return response()->json(['message' => 'Order item deleted successfully'], 200);
        }
    }
    
