<?php

// app/Http/Controllers/ReviewController.php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\ProductDetail;
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

    $product = ProductDetail::findOrFail($productId); // Fetch the product

    $user = Auth::user();

    $review = $product->reviews()->create([
        'user_id' => $user->id,
        'content' => $request->input('content'),
        'rating' => $request->input('rating'),
        'product_detail_id' => $productId,
    ]);

    return redirect()->route('product.show', $productId)->with('success', 'Review submitted successfully!');

}


public function reply(Request $request, $reviewId)
{
    $request->validate([
        'reply_content' => 'required|string',
    ]);
    $review = Review::findOrFail($reviewId);
    $review->admin_reply = $request->input('reply_content');
    $review->save();

    // Fetch the related product for the review
    $product = $review->productDetail;


    return redirect()->route('product.show', ['productId' => $product->id])->with('success', 'Reply sent successfully!');
}


    public function showReviewPage($productId)
    {
        $product = Product::findOrFail($productId);
        return view('review', compact('product'));
    }
}
