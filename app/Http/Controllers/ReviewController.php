<?php

// app/Http/Controllers/ReviewController.php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request, $productId)
    {
        $request->validate([
            'content' => 'required|string',
            'rating' => 'required|integer|min:0|max:5',
        ]);

        $product = Product::findOrFail($productId);

        $user = Auth::user();

        $review = new Review([
            'user_id' => $user->id,
            'content' => $request->input('content'),
            'rating' => $request->input('rating'),
        ]);

        $product->reviews()->save($review);

        return redirect()->back()->with('success', 'Review submitted successfully!');
    }

    public function reply(Request $request, $reviewId)
    {
        // Validate the request data
        $request->validate([
            'reply_content' => 'required|string',
        ]);

        // Retrieve the review based on the provided review ID
        $review = Review::findOrFail($reviewId);

        // Save the admin's reply to the review
        $review->admin_reply = $request->input('reply_content');
        $review->save();

        // Redirect back to the product page or wherever you want after the reply is submitted
        return redirect()->back()->with('success', 'Reply sent successfully!');
    }
}
