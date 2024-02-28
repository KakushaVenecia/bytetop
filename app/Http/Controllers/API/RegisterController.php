<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Notifications\WelcomeEmail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Carbon;
use Tymon\JWTAuth\Facades\JWTAuth;

class RegisterController extends Controller
{
    public function regist(Request $request)
    {
        dd($request->all());
        // Validate request data
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required|same:password',
        ]);
    
        try {
            // Check if user already exists
            $existingUser = User::where('email', $request->input('email'))->first();
            if ($existingUser) {
                return response()->json(['error' => 'User with this email already exists.'], 422);
            }
    
            // Create the user
            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
                'role' => 'customer', // Set the default role to "customer"
            ]);
    
            // Generate JWT token
            $token = JWTAuth::fromUser($user);
    
            // Generate verification URL with JWT token
            $verificationUrl = URL::to('/verify-email') . '?token=' . $token;
    
            // Send welcome email with verification link
            $user->notify(new WelcomeEmail($verificationUrl));
    
            // Return a success response
            return response()->json(['message' => 'Registration email sent to user.'], 200);
        } catch (\Exception $e) {
            // Log the detailed error message for debugging
            logger()->error('Failed to register user: ' . $e->getMessage());
    
            // Return an error response
            return response()->json(['error' => 'Failed to register user. Please try again later.'], 500);
        }
    }
    
    

    public function loginUser(Request $request)
    {
        // dd($request);
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
        // Session::put('authenticated', true);
        // Session::put('user_name', $user->name);
         // Store user information in session
       // Store user information in session
        $request->session()->put('authenticated', true);
        $request->session()->put('user_id', $user->id);
        $request->session()->put('user_name', $user->name);
    
        // Redirect the user to the desired page (e.g., dashboard)
        return redirect('/');
    }
}