<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShippingAddressController extends Controller
{
    public function index()
    {
        // Retrieve all shipping addresses
        $shippingAddresses = ShippingAddress::all();

        // Return view with shipping addresses
        return view('shipping-address.index', ['shippingAddresses' => $shippingAddresses]);
    }

    public function store(Request $request)
    {
        // Validate request data
        $validatedData = $request->validate([
            'user_id' => 'required',
            'address' => 'required',
            'city' => 'required',
            'country' => 'required',
            'postal_code' => 'required',
        ]);

        // Create a new shipping address
        $shippingAddress = ShippingAddress::create($validatedData);

        // Redirect to the index page with a success message
        return redirect()->route('shipping-address.index')->with('success', 'Shipping address created successfully');
    }
}
