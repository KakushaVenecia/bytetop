<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{

    

    public function store(Request $request)

    { 
        
        auth()->check();
        // Validate request data
         $request->validate([
            
            'card_number' => 'required',
            'expiry_month' => 'required',
            'expiry_year' => 'required',
            'security_code' => 'required',
            'name' => 'required|string',
        ]);

            // Check if the card details already exist for the authenticated user
    $existingPayment = Payment::where('user_id', auth()->id())
                                ->where('card_number', $request->input('card_number'))
                                ->where('expiry_month', $request->input('expiry_month'))
                                ->where('expiry_year', $request->input('expiry_year'))
                                ->where('security_code', $request->input('security_code'))
                                ->where('name', $request->input('name'))
                                ->exists();

        if ($existingPayment) {
        return redirect()->back()->with('error', 'Card details already exist.');
        }else{
            // Create a new card
        $payment = Payment::create([
            'user_id' => auth()->id(),
            'card_number' => $request->input('card_number'),
            'expiry_month' =>$request->input('expiry_month'),
            'expiry_year'  =>$request->input('expiry_year'),
            'security_code'=>$request->input('security_code'),
            'name'=>$request->input('name'),
        ]);
        }

        

         // Retrieve payment details from the database
         $paymentCards = Payment::findOrFail($payment->id);

         // Pass payment details to the account view
         return view('account', ['paymentCards' => $paymentCards]);
    }

    
}
