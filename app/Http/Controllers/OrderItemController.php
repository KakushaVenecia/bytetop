<?php

namespace App\Http\Controllers;

    use App\Models\Order;
    use App\Models\OrderItem;
    use Illuminate\Http\Request;
    use App\Models\Cart;
    use Illuminate\Support\Str;
    use App\Models\Notification;
    use App\Models\User;
    use App\Notifications\NewOrderNotification;


    class OrderItemController extends Controller
    { 
        // Other methods...
    
        public function create(Request $request)
        {
            $sessionData = $request->session()->all();
        
            // Generate a unique identifier for the order
            $orderIdentifier = substr(uniqid('order', true), -6);
        
            // Your existing logic to create order items
            foreach ($sessionData['cart']['items'] as $item) {
                OrderItem::create([
                    'order_identifier' => $orderIdentifier,
                    'user_id' => $sessionData['user_id'],
                    'name' => $item['name'],
                    'quantity' => $item['quantity'],
                    'price' => $item['price'],
                    'status' => 'Initiated'
                ]);
            }
        
            // Delete cart items from the database
            Cart::where('user_id', $sessionData['user_id'])->delete();
        
            $admins = User::where('role', 'admin')->get();
            $superAdmins = User::where('role', 'super_admin')->get();
            
            foreach ($admins as $admin) {
                $admin->notify(new NewOrderNotification($orderIdentifier));
            }
            
            foreach ($superAdmins as $superAdmin) {
                $superAdmin->notify(new NewOrderNotification($orderIdentifier));
            }
        
            return view('ordersuccess');
        }

public function approve(Order $order)
{
    $order->update(['status' => 'Processing']);

    // Redirect back or do any other necessary actions
    return redirect()->back()->with('success', 'Order approved successfully.');
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
    
