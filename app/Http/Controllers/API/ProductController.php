<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Tymon\JWTAuth\Facades\JWTAuth;

class ProductController extends Controller
{
    public function create()
    {
        $products = Product::all();
        return view('admindashboard.create')->with('products', $products);
    }

    public function store(Request $request)
    { 
        // Validate the request data
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'tags' => 'required|string',
            'category' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'quantity' => 'required|integer|min:1', 
        ]);
    
        // Store the image
        $image = $request->file('image');
        $filename = $image->hashName();
        $image->store('images', 'public');
    
        // Create an array with common fields for all products
        $commonFields = [
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'tags' => $request->input('tags'),
            'category' => $request->input('category'),
            'image' => $filename,
            'user_id' => auth()->id(),
        ];
    
        // Create multiple products based on quantity
        for ($i = 0; $i < $request->quantity; $i++) {
            Product::create($commonFields);
        }
    
        // return redirect()->route('dashboard')->with('success', 'Products created successfully');
        // Return a JSON response indicating success or failure
         return response()->json(['success' => true, 'message' => 'Product created successfully']);
    }
    

    public function edit($id)
    {
        
        $product = Product::findOrFail($id);
        return view('admindashboard.edit', compact('product'));
        
    }

    public function update(Request $request, $id)
    {
         // Debug: Dump the product ID received in the request
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'tags' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category' => 'required|string',
            
        ]);

        

        // Find the product by ID
        $product = Product::findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('public/images', $imageName); // Store in the 'storage/app/public/images' directory
            $product->image = $imageName;
        }

        // Update the product
        $product->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'tags' => $request->input('tags'),
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
    $products = Product::select('id', 'name')->distinct()->get();
    dd($products);
    return view('admindashboard.create', compact('products'));
}
public function getProductDescription(Request $request)
{
    $productName = $request->query('name');

    // Retrieve the product description based on the product name
    $product = Product::where('name', $productName)->first();

    if ($product) {
        // If the product is found, return its description
        return response()->json(['description' => $product->description]);
    } else {
        // If the product is not found, return a JSON response with a 404 status code
        return response()->json(['error' => 'Product not found'], 404);
    }
}

public function dashboard()
{
    $productCount = Product::count();
    $products = Product::all();
    $users = User::all();

    // Return the view with all necessary data
    return view('admindashboard.dashboard', [
        'productCount' => $productCount,
        'products' => $products,
        'users' => $users,
    ]);
}

}