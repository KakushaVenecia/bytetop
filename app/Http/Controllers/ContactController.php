<?php



// app/Http/Controllers/ContactController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class ContactController extends Controller
{
    public function index()
    {
        return view('contactus');
    }
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'contact_no' => 'required|string',
            'message' => 'required|string',
        ]);

        // Create a new message using the validated data
        Message::create($validatedData);

        // Redirect back to the contact page with a success message
        return redirect('/speak-to-us')->with('success', 'Message sent successfully!');
    }

    public function fetch()
    {
        // Fetch messages from the database ordered by the oldest created_at timestamp
        $messages = Message::orderBy('created_at', 'asc')->get();

        // Return the fetched messages
        return response()->json(['messages' => $messages]);
    }
}
