<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Notifications\WelcomeEmail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Carbon;
use Tymon\JWTAuth\Facades\JWTAuth;

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

    // Check if user already exists
    $existingUser = User::where('email', $request->input('email'))->first();
    if ($existingUser) {
        return redirect()->back()->withInput()->with('error', 'User with this email already exists.');
    }

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

        // Return a redirect response with a success message
        return redirect('/verifyemail')->with('success', 'Registration email sent to user.');
    } catch (\Exception $e) {
        // Log the detailed error message for debugging
        logger()->error('Failed to register user: ' . $e->getMessage());

        // Return a redirect response with an error message
        return redirect()->back()->withInput()->with('error', 'Failed to register user. Please try again later.');
    }
}

    public function loginUser(Request $request)
    {
        // Retrieve the user record based on the provided email
        $user = User::where('email', $request->input('email'))->first();
    
        // Check if a user with the provided email exists
        if (!$user) {
            // User not found
            return redirect()->back()->with('error', 'Invalid email or password.');
        }
    
        // Verify that the provided password matches the hashed password stored in the database
        if (!Hash::check($request->input('password'), $user->password)) {
            // Password does not match
            return redirect()->back()->with('error', 'Invalid email or password.');
        }
    
        // Check if the user is an admin
        if ($user->role === 'admin') {
            // Set session data for admin user
            Session::put('admin_authenticated', true);
    
            // Redirect admin user to admin dashboard
            return redirect('/admin/dashboard');
        }
    
        // Check if the user's email has been verified
        if (!$user->email_verified_at) {
            // If the user is not verified, return an error response
            return response()->json(['error' => 'Email not verified'], 401);
        }
    
        // Regular user authentication
        // Perform any additional actions, such as storing user session data, logging, etc.
        Session::put('authenticated', true);
    
        // Redirect the user to the desired page (e.g., dashboard)
        return redirect('/');
    }
}