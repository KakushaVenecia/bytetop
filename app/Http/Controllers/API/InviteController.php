<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InviteController extends Controller
{
    public function invite(Request $request)
    {
        // validation and submit data dd($request->all()); this is to get the request body(diedump)
        // dd($request->file('image'));
        $formFields = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
        ]);

                // Create a new invitation record in the database
                $invitation = Invitation::create([
                    'name' => $formFields['name'],
                    'email' => $formFields['email'],
                    'status' => 'pending', // Assuming the default status is 'pending'
                ]);
        
                // Send an invitation email
                Mail::to($formFields['email'])->send(new InvitationMail($formFields['name']));
        
                // Return a success response
                return response()->json(['message' => 'Invitation sent successfully', 'invitation_id' => $invitation->id], 200); 
    
}
}