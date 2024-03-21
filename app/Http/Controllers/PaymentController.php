<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{

    

    public function store(Request $request)
    { dd($request);
        // Validate request data
        $validatedData = $request->validate([
            'card_number' => 'required|integer|min 16|max 16',
            'expiry_date' => 'required',
            'security_code' => 'required|integer|min 3|max 3',
            'name' => 'required|string',
        ]);

        // Create a new shipping address
        $payment = Payment::create($validatedData);

       
    }
}
