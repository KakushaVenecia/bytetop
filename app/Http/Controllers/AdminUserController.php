<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function deleteUser(User $user)
    {
        // Check if the user exists
        if ($user) {
            // Delete the user
            $user->delete();

            // Redirect back with a success message or do any other action
            return redirect()->back()->with('success', 'User deleted successfully.');
        } else {
            // Redirect back with an error message or handle the case where the user does not exist
            return redirect()->back()->with('error', 'User not found.');
        }
    }
}
