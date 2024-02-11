<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class VerificationController extends Controller
{ 
     public function verify(Request $request)   
{
    $userId = $request->query('id');
    $verificationToken = $request->query('hash');

    // Retrieve the user by ID
    $user = User::findOrFail($userId);

    // Retrieve the email verification token from the user
    $userVerificationToken = $user->email_verification_token;

// Compare the user ID and verification token with the values from the request query parameters
if ($userId == $user->id && hash_equals($verificationToken, $userVerificationToken)) {
        // If the user ID and verification token match, mark the email as verified
        $user->markEmailAsVerified();
        $user->save(); 
            logger()->info('Email verified successfully.');

            // Redirect the user to a success page or display a success message
            return view('verification.verify-success');
        }

        // You can handle the error in different ways, such as displaying a generic error message to the user
        return view('verification.verify-error');
}
}