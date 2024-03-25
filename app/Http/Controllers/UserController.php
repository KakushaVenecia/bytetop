<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Notifications\PasswordUpdatedEmail;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
     /**
     * This function logs in the user.
     *
     * @param \Illuminate\Http\Request $request The request object.
     * @return \Illuminate\Http\RedirectResponse Redirects the user after login.
     */
    public function updatePassword(Request $request)
    {
        // Validate the request data
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8',
            'confirm_password' => 'required|same:new_password',
        ]);

        // Get the authenticated user
        $user = Auth::user();

        // Check if the current password matches the user's password
        if (!Hash::check($request->input('current_password'), $user->password)) {
            return redirect()->back()->withErrors(['current_password' => 'The current password is incorrect.']);
        }

        // Update the user's password
        $user->password = Hash::make($request->input('new_password'));
        $user->save();

        $user->notify(new PasswordUpdatedEmail());

        // Redirect the user back with a success message
        return redirect()->back()->with('success', 'Password updated successfully.');
    }
}
