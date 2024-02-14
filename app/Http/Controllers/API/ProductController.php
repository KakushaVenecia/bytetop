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
        // validation and submit data dd($request->all()); this is to get the request body(diedump)
        // dd($request->file('image'));
        $formFields = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'tags' => 'required|string',
            'category' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Store the image
        $image = $request->file('image');
        $filename = $image->hashName();
        $image->store('images', 'public');
        $formFields['image'] = $filename; // Assign the filename to the 'image' field
    
        // Assign the authenticated user's ID
        $formFields['user_id'] = auth()->id();
    
        // Debug: Dump the form fields to ensure correct data
        // dd($formFields);
    
        // Create the product
        Product::create($formFields);
    
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
            'image' => 'required|string',
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

    public function index()
{
    $products = Product::all();
    return view('admindashboard.create', compact('products'));
}
}