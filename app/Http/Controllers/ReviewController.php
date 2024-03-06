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
            'user_name' => $user->name,
            'content' => $request->input('content'),
            'rating' => $request->input('rating'),
        ]);

        $product->reviews()->save($review);

        return redirect()->back()->with('success', 'Review submitted successfully!');
    }
}