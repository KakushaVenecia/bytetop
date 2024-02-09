<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Redirect;



// Route::get('/products/create', [ProductController::class, 'create']);
// Route::post('/products', [ProductController::class, 'store'])->name('products.store');
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
            // Add more validation rules as needed
        ]);

        // Create a new product
        $product = Product::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            // Add more fields as needed
        ]);

        return Redirect::route('dashboard')->with('success', 'Product created successfully');
    }
}
