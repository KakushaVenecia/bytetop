<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Redirect;
use Tymon\JWTAuth\Facades\JWTAuth;

class ProductController extends Controller
{
    public function create()
    {
        return view('admindashboard.create');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'tags' => 'required|string',
            'images' => 'required|string',
            'category' => 'required|string',
        
        ]);

        // Create a new product
        $product = Product::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'tags' => $request->input('tags'),
            'images' => $request->input('images'),
            'category' => $request->input('category'),
        
        ]);

        return Redirect::route('dashboard')->with('success', 'Product created successfully');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admindashboard.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'tags' => 'required|string',
            'images' => 'required|string',
            'category' => 'required|string',
            
        ]);

        // Find the product by ID
        $product = Product::findOrFail($id);

        // Update the product
        $product->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'tags' => $request->input('tags'),
            'images' => $request->input('images'),
            'category' => $request->input('category'),
        
        ]);

        return Redirect::route('dashboard')->with('success', 'Product updated successfully');
    }


    public function destroy($id)
    {
        // Find the product by ID and delete it
        $product = Product::findOrFail($id);
        $product->delete();

        return Redirect::route('dashboard')->with('success', 'Product deleted successfully');
    }

    // Example of how to use JWT authentication for product APIs
    // public function index()
    // {
    //     $user = JWTAuth::parseToken()->authenticate();
    //     $products = Product::all();

    //     return response()->json(['user' => $user, 'products' => $products]);
    // }
    public function index()
{
    $products = Product::all();
    return view('admindashboard.create', compact('products'));
}
}
