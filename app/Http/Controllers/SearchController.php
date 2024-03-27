<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\ProductDetail;

class SearchController extends Controller
{
    public function find()
    {

        return view('Search');
    }

    public function findSearch()
{
    $search = request()->input('search');
    $test = ProductDetail::where('name', 'LIKE', '%'.$search.'%')
        ->orWhere('description', 'LIKE', '%'.$search.'%')
        ->orWhere('tags', 'LIKE', '%'.$search.'%')
        ->get();

    if ($test->count() > 0) {
        $allTags = ProductDetail::pluck('tags')->flatMap(function ($tags) {
            return explode(',', $tags);
        })->unique()->values()->all();

        $isInCart = [];
        foreach ($test as $product) {
            $isInCart[$product->id] = Cart::where('name', $product->name)->exists();
        }

        return view('Search', compact('allTags', 'isInCart', 'test', 'search'));
    } else {
        return view('Search')->with('message', 'No Details found. Try to search again !');
    }
}
}