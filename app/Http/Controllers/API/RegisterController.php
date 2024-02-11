<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;


// Route::get('/register', [RegisterController::class, 'signin']);
// Route::get('/products/create', [ProductController::class, 'create']);
// Route::post('/products', [ProductController::class, 'store'])->name('products.store');
// Route::post('/register', [RegisterController::class, 'register'])->name('register');

class RegisterController extends Controller
{
    public function signin()
    {
        return view('register');
    }

    //         // Redirect the user based on their role
    //         if ($role === 'admin') {
    //             // Redirect admin to admin dashboard
    //             return Redirect::route('dashboard')->with('success', 'Registration successful');
    //         } else {
    //             // Redirect customer to customer dashboard
    //             return Redirect::route('customerdash')->with('success', 'Registration successful');
    //         }
    //     } catch (\Exception $e) {
    //         // Handle any exceptions
    //         return Redirect::back()->with('error', 'Failed to register user')->withErrors($e->getMessage());
    //     }
    //     //  Validate request data


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
        // Check if there are any existing users
        $userCount = User::count();

        // Determine the role based on the number of existing users
        $role = $userCount == 0 ? 'admin' : 'customer';

        // Create the user with the determined role
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'role' => $role,
        ]);

        // Return a JSON response with the user data
        return response()->json(['message' => 'Registration successful', 'user' => $user], 201);
    } catch (\Exception $e) {
        // Log the detailed error message for debugging
        logger()->error('Failed to register user: ' . $e->getMessage());

        // Return a JSON response with an error message
        return response()->json(['error' => 'Failed to register user. Please try again later.'], 500);
    }
}

}
