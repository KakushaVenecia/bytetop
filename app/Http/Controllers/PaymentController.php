<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{

    

    public function store(Request $request)
    { dd($request);
        // Validate request data
        $validatedData = $request->validate([
            'card_number' => 'required',
            'expiry_date' => 'required',
            'security_code' => 'required',
            'name' => 'required',
        ]);

        // Create a new shipping address
        $payment = Payment::create($validatedData);

       
    }
}
