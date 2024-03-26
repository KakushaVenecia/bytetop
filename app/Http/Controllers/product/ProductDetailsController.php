<?php

namespace App\Http\Controllers\product;

use App\Http\Controllers\Controller;

use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\Cart;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductDetailsController extends Controller
{
    public function show($id)
    {
        $product = ProductDetail::with('reviews')->findOrFail($id);
        
        $is_admin = false;
         $is_customer = false;

    if (Auth::check()) {
        $user = Auth::user();

        if ($user->role == 'super_admin' || $user->role == 'admin') {
            $is_admin = true;
        }
        
        if ($user->role == 'customer') {
            $is_customer = true;
        }
    }
        return view('product.show', compact('product', 'is_admin', 'is_customer'));
    }

    public function getLaptops()
    {
        $products = ProductDetail::where('category', 'Laptops')
                         ->where('quantity', '>', 1) 
                         ->paginate(6);

    $maxComputerPrice = $products->max('price');
    $minComputerPrice = $products->min('price');


    $allTags = $products->pluck('tags')->flatMap(function ($tags) {
        return explode(',', $tags);
    })->unique()->values()->all();

    $isInCart = [];
    foreach ($products as $product) {
        $isInCart[$product->id] = Cart::where('name', $product->name)->exists();
    }
        return view('categories.laptop', compact('products','maxComputerPrice', 'minComputerPrice' , 'allTags', 'isInCart'));
    }

    public function getComputers()
{
    $products = ProductDetail::where('category', 'Computers')
                         ->where('quantity', '>', 1) 
                         ->paginate(16);

    $maxComputerPrice = $products->max('price');
    $minComputerPrice = $products->min('price');


    $allTags = $products->pluck('tags')->flatMap(function ($tags) {
        return explode(',', $tags);
    })->unique()->values()->all();

    $isInCart = [];
    foreach ($products as $product) {
        $isInCart[$product->id] = Cart::where('name', $product->name)->exists();
    }


    return view('categories.computers', compact('products', 'maxComputerPrice', 'minComputerPrice' , 'allTags', 'isInCart'));
}

    public function getAccessories()
    {
    $products = ProductDetail::where('category', 'Accessories' )
                         ->where('quantity', '>', 1) 
                         ->paginate(16);

    $maxComputerPrice = $products->max('price');
    $minComputerPrice = $products->min('price');


    $allTags = $products->pluck('tags')->flatMap(function ($tags) {
        return explode(',', $tags);
    })->unique()->values()->all();

    $isInCart = [];
    foreach ($products as $product) {
        $isInCart[$product->id] = Cart::where('name', $product->name)->exists();
    }
    
        return view('categories.accessories', compact('products' ,'maxComputerPrice', 'minComputerPrice' , 'allTags', 'isInCart'));
    }
    public function getMonitors()
{
    $products = ProductDetail::where('category', 'Monitors' )
    ->where('quantity', '>', 1) 
    ->paginate(16);
    $maxComputerPrice = $products->max('price');
    $minComputerPrice = $products->min('price');


    $allTags = $products->pluck('tags')->flatMap(function ($tags) {
        return explode(',', $tags);
    })->unique()->values()->all();

    $isInCart = [];
    foreach ($products as $product) {
        $isInCart[$product->id] = Cart::where('name', $product->name)->exists();
    }
    return view('categories.monitors', compact('products' ,'maxComputerPrice', 'minComputerPrice' , 'allTags', 'isInCart'));
}
    public function getAllInOne()
    {
       
        $products = ProductDetail::where('category', 'Monitors' )
        ->where('quantity', '>', 1) 
        ->paginate(16);
        $maxComputerPrice = $products->max('price');
        $minComputerPrice = $products->min('price');


        $allTags = $products->pluck('tags')->flatMap(function ($tags) {
            return explode(',', $tags);
        })->unique()->values()->all();

        $isInCart = [];
        foreach ($products as $product) {
            $isInCart[$product->id] = Cart::where('name', $product->name)->exists();
        }
        return view('categories.all-in-one', compact('products' ,'maxComputerPrice', 'minComputerPrice' , 'allTags', 'isInCart'));
    }  
    

    
}
