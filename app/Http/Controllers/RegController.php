<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Notifications\WelcomeEmail;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Password;
use App\Models\Cart;


class RegController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
        ], [
            'name.required' => 'The name field is required.',
            'email.required' => 'The email field is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'The email address is already in use.',
            'password.required' => 'The password field is required.',
            'password.min' => 'The password must be at least 8 characters long.',
            'password_confirmation.required' => 'Please confirm your password.',
            'password_confirmation.same' => 'The passwords do not match.',
        ]);
    
        try {
            // Check if user already exists
            $existingUser = User::where('email', $request->input('email'))->first();
            if ($existingUser) {
                return redirect()->back()->with('error', 'User with this email already exists.');
            }
        
          // Generate a random verification token
          $verificationToken = Str::random(40); // You can adjust the length as needed
    
          // Create the user with the verification token
          $user = User::create([
              'name' => $request->input('name'),
              'email' => $request->input('email'),
              'password' => Hash::make($request->input('password')),
              'role' => 'customer', // Set the default role to "customer"
              'email_verification_token' => $verificationToken, // Save the verification token
          ]);
        
            // Generate verification URL with JWT token
            $verificationUrl = URL::to('/verify-email') . '?token=' . $verificationToken;
        
            // Send welcome email with verification link
            $user->notify(new WelcomeEmail($verificationUrl));
        
            // Flash success message
            return redirect('/verifyemail')->with('success', 'Registration successful. Please check your email for verification.');
        } catch (\Exception $e) {
            // Log the detailed error message for debugging
            logger()->error('Failed to register user: ' . $e->getMessage());
        
            // Flash error message for registration failure
            return redirect()->back()->with('error', 'Failed to register user. Please try again later.');
        }
    }

    public function showLoginForm()
    {
        return view('login');
    }
    public function login(Request $request)

    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            $userId = Auth::id();

            $cartCount = Cart::where('user_id', $userId)->count();
            session()->put('authenticated', true);
            session()->put('user_id', Auth::user()->id); 
            session()->put('user_name', Auth::user()->name);
            session()->put('cart_count', $cartCount);

            return redirect()->route('landing')->with('success', 'Login successful');
        } else {
            return redirect()->back()->with('error', 'Invalid credentials')->withInput();
        }
    }
    public function logout(Request $request)
    {
        // dd($request);
        // there is an error of token
        // Auth::logout(); // Clear authentication status

        $request->session()->invalidate(); // Invalidate the session

        $request->session()->regenerateToken(); // Regenerate CSRF token

        return redirect()->route('landing');
    }

    public function showLinkRequestForm()
    {
        return view('auth.passwords.email');
    }

    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink($request->only('email'));

        return $status === Password::RESET_LINK_SENT
                    ? back()->with('status', __($status))
                    : back()->withErrors(['email' => __($status)]);
    }

    public function showResetForm(Request $request, $token)
    {
        return view('auth.passwords.reset', ['token' => $token, 'email' => $request->email]);
    }

    public function reset(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->save();
            }
        );

        return $status === Password::PASSWORD_RESET
                    ? redirect()->route('login-user')->with('status', __($status))
                    : back()->withErrors(['email' => [__($status)]]);
    }
}