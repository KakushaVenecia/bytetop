<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Notifications\InviteAdminEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\Database\QueryException;
use Illuminate\Validation\ValidationException;

class InviteController extends Controller
{
    public function invite(Request $request)
    {
        try {
            auth()->check();
            // Generate a token and password
            $token = Str::random(60);
            $password = Str::random(10);

            // Validate the request
            $formFields = $request->validate([
                'name' => 'required|string',
                'email' => 'required|email',
            ]);

            // Create a new user record in the database
            $invitedUser = User::create([
                'name' => $formFields['name'],
                'email' => $formFields['email'],
                'password' => bcrypt($password),
                'status' => 'active',
                'role' => 'admin',
                'email_verification_token' => $token,
            ]);

            // Determine the inviter (you may get this from the authenticated user or elsewhere)
            if (auth()->check()) {
                $inviterName = auth()->user()->name;
            } else {
                $inviterName = 'ByteTop Admin';
            }

            // Send an invitation email with the generated password and inviter's ID
            $invitedUser->notify(new InviteAdminEmail($token, $password, $inviterName));

            return Redirect::route('dashboard')->with('success', 'Invitation sent successfully');
        } catch (QueryException $e) {
            // Handle the case where the user already exists
            return back()->withInput()->withErrors(['email' => 'User with this email already exists']);
        } catch (ValidationException $e) {
            // Handle validation errors
            return back()->withErrors($e->errors())->withInput();
        }
    }
}
