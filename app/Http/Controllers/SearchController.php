<?php

namespace App\Http\Controllers;

use App\Models\ProductDetail;
;
use App\Http\Controllers\Controller;
use App\Models\Cart;


class SearchController extends Controller
{
    public function find()
    {	

    
    return view('Search');			
    }		
    public function findSearch()
    {	$products = ProductDetail::all()	;	
        $search = request()->input("search");		
        $test = ProductDetail::where('name', 'LIKE', '%' . $search . '%')
            ->orWhere('description', 'LIKE', '%' . $search . '%')
            ->orWhere('tags', 'LIKE', '%' . $search . '%')
            ->get();
            $allTags = $products->pluck('tags')->flatMap(function ($tags) {
                return explode(',', $tags);
            })->unique()->values()->all();
        
            $isInCart = [];
            foreach ($products as $product) {
                $isInCart[$product->id] = Cart::where('name', $product->name)->exists();

        if (count($test) > 0) {
            return view('Search', compact('allTags','isInCart'))->with('test', $test)->with('query', $search);
        } else {
            return view('Search')->with('message', 'No Details found. Try to search again !');
        }		
            }
        }
}
