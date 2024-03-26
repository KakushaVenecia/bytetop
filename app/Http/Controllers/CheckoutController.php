<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\ShippingAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CheckoutController extends Controller
{
    public function showCheckoutForm(Request $request)
    {
        $userId = auth()->id();
        // Retrieve shipping details for the user
        $shippingDetails = ShippingAddress::where('user_id', $userId)->get();
        // Retrieve payment modes for the user
        $paymentModes = Payment::where('user_id', $userId)->get();

        return view('checkout', compact('shippingDetails', 'paymentModes'));
    }

    public function initiateOrder(Request $request)
    {
        $userId = auth()->id();

        // Get the items and subtotal from the request
        $items = $request->input('items');
        $subtotal = 0;

        // Calculate subtotal for each item
        foreach ($items as $item) {
            $quantity = $item['quantity'];
            $price = $item['price'];
            $subtotal += $quantity * $price;

            // Add order items to the order
            foreach ($items as $item) {
                // $orderItem = new OrderItem();
                // $orderItem->user_id = $userId;
                // $orderItem->name = $item['name'];
                // $orderItem->quantity = $item['quantity'];
                // $orderItem->price = $item['price'];
                // $orderItem->subtotal = $subtotal;
                // $orderItem->status = 'Initiated';
                // $orderItem->save();
            }

            // Return a response indicating the success or failure of the order creation
            return Redirect::route('checkout')->with('success', 'Order created successfully');
        }

    }

    public function processPayment(Request $request)
    {
        // Logic to process the payment
        // This method will typically handle form submission and payment processing
    }

    public function confirmOrder()
    {
        // Logic to confirm the order and display a confirmation page
        return view('checkout.confirmation');
    }
}
