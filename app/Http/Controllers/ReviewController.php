<?php

// app/Http/Controllers/ReviewController.php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request, $productId)
    {
        $request->validate([
            'user_name' => 'required|string|max:255',
            'content' => 'required|string',
            'rating' => 'required|integer|min:0|max:5',
        ]);

        $product = Product::findOrFail($productId);

        $review = new Review([
            'user_name' => $request->input('user_name'),
            'content' => $request->input('content'),
            'rating' => $request->input('rating'),
        ]);

        $product->reviews()->save($review);

        return redirect()->back()->with('success', 'Review submitted successfully!');
    }
}
