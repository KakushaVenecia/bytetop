<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Notifications\WelcomeEmail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Carbon;

class RegisterController extends Controller
{
    public function regist(Request $request)
    {
        // Validate request data
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required|same:password',
        ]);

        try {
            // Create the user
            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
                'role' => 'customer', // Set the default role to "customer"
            ]);

            // Generate email verification token
            $token = Str::random(60);

            // Update user with email verification token
            $user->update(['email_verification_token' => $token]);

            // Generate verification URL with user's ID
                $verificationUrl = URL::temporarySignedRoute(
                    'verification.verify',
                    Carbon::now()->addMinutes(60),
                    ['id' => $user->getKey(), 'hash' => $token] 
                );

            // Send welcome email with verification link
            $user->notify(new WelcomeEmail($verificationUrl));

            // Return a JSON response with the user data
            return response()->json(['message' => 'Registration email sent to User', 'user' => $user], 201);
        } catch (\Exception $e) {
            // Log the detailed error message for debugging
            logger()->error('Failed to register user: ' . $e->getMessage());

            // Return a JSON response with an error message
            return response()->json(['error' => 'Failed to register user. Please try again later.'], 500);
        }
    }
}