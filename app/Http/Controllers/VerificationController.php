<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class VerificationController extends Controller
{ 
    public function verify(Request $request)
    {
        // Check if the request contains a token
        if ($request->has('token')) {
            $token = $request->query('token');
            $user = User::where('email_verification_token', $token)->first();
    
            // Check if a user with the token is found
            if ($user) {
                // Check if the user is an admin
                if ($user->role === 'admin') {
                    // Mark email as verified for admin users
                    $user->markEmailAsVerified();
                    $user->save();
    
                    // Log admin email verification
                    logger()->info('Admin email verified successfully.');
    
                    // Redirect admin users to the admin dashboard or another page
                    return redirect('/admin/dashboard');
                }
    
                if ($user->hasVerifiedEmail()) {
                    // Redirect the user to the login page
                    return redirect()->route('/signin')->with('info', 'Your email is already verified. You can now login.');
                } elseif (!$user->hasVerifiedEmail() && $user->markEmailAsVerified()) {
                    // Redirect the user to the verification success page
                    return redirect()->route('verification.verify-success')->with('success', 'Email verified successfully. You can now login.');
                }
                
                // If there was an issue marking the email as verified
                // Redirect the user to an error page or display a generic error message
                return redirect()->route('verification.verify-error');
            }
        }
    }

//      public function verify(Request $request)   
// {
//     $userId = $request->query('id');
//     $verificationToken = $request->query('hash');

//     // Retrieve the user by ID
//     $user = User::findOrFail($userId);
  
//     if ($user->role === 'admin') {
//         // Mark the email as verified for admin users
//         $user->markEmailAsVerified();
//         $user->save();
//         }

//     // Retrieve the email verification token from the user
//     $userVerificationToken = $user->email_verification_token;

// // Compare the user ID and verification token with the values from the request query parameters
// if ($userId == $user->id && hash_equals($verificationToken, $userVerificationToken)) {
//         // If the user ID and verification token match, mark the email as verified
//         $user->markEmailAsVerified();
//         $user->save(); 
//             logger()->info('Email verified successfully.');

//             // Redirect the user to a success page or display a success message
//             return view('verification.verify-success');
//         }

//         // You can handle the error in different ways, such as displaying a generic error message to the user
//         return view('verification.verify-error');
// }
}