<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function create()
    {
        auth()->check();
        $products = ProductDetail::all();

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
            'brand' => 'required|string',
            'category' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'quantity' => 'required|integer|min:1',
        ]);

        // Create the product
        for ($i = 0; $i < $request->quantity; $i++) {
            $modelNumber = 'PROD-'.Str::random(6); // Example of a prefix and a random suffix

            // Ensure the generated model number is unique
            while (Product::where('model_number', $modelNumber)->exists()) {
                $modelNumber = 'PROD-'.Str::random(6);
            }

            $product = Product::create([
                'model_number' => $modelNumber,
                'name' => $request->input('name'),
            ]);
        }
        // Store the image
        $image = $request->file('image');
        $filename = $image->hashName();
        $image->store('images', 'public');

        // Create the product detail
        ProductDetail::create([
            'product_id' => $product->id,
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'tags' => $request->input('tags'),
            'brand' => $request->input('brand'),
            'category' => $request->input('category'),
            'image' => $filename,
            'quantity' => $request->input('quantity'),
            'rating' => null, // You can set rating if available
        ]);

        // Return a JSON response indicating success
        return response()->json(['success' => true, 'message' => 'Product created successfully']);
    }

    public function edit($id)
    {
        $product = ProductDetail::findOrFail($id);

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
            'brand' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category' => 'required|string',
            'quantity' => 'required|integer|min:1',

        ]);
        $product = ProductDetail::findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'_'.$image->getClientOriginalName();
            $image->storeAs('public/images', $imageName); // Store in the 'storage/app/public/images' directory
            $product->image = $imageName;
        }

        // Retrieve the current quantity and name of the product from the ProductDetail table
        $productDetail = ProductDetail::findOrFail($id);
        $currentQuantity = $productDetail->quantity;
        $productName = $productDetail->name;

        // Retrieve the requested quantity from the request
        $requestQuantity = $request->input('quantity');

        if ($requestQuantity >= $currentQuantity) {
            // Calculate the difference in quantity
            $quantityDifference = $requestQuantity - $currentQuantity;

            // Update the ProductDetail table
            $productDetail->update([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'price' => $request->input('price'),
                'tags' => $request->input('tags'),
                'brand' => $request->input('brand'),
                'category' => $request->input('category'),
                'quantity' => $requestQuantity,
                'image' => $imageName,
            ]);

            // Create additional products in the Product table
            for ($i = 0; $i < $quantityDifference; $i++) {
                $modelNumber = 'PROD-'.Str::random(6);

                //  generated model number is unique
                while (Product::where('model_number', $modelNumber)->exists()) {
                    $modelNumber = 'PROD-'.Str::random(6);
                }

                Product::create([
                    'model_number' => $modelNumber,
                    'name' => $request->input('name'),
                ]);
            }

            return Redirect::route('dashboard')->with('success', 'Product updated successfully');
        } else {
            // Calculate the difference in quantity
            $quantityDifference = $currentQuantity - $requestQuantity;

            // Update the ProductDetail table with the new quantity
            $productDetail->update([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'price' => $request->input('price'),
                'tags' => $request->input('tags'),
                'brand' => $request->input('brand'),
                'category' => $request->input('category'),
                'quantity' => $requestQuantity,
                'image' => $imageName,
            ]);

            // Find all products with the same name and update their names
            Product::where('name', $productName)->update(['name' => $request->input('name')]);

            // Remove rows from the Product table based on the quantity difference
            Product::where('name', $productName)->take($quantityDifference)->delete();

            return Redirect::route('dashboard')->with('success', 'Product updated successfully');
        }
    }

    public function destroy($id)
    {
        // Find the product by ID
        $product = ProductDetail::findOrFail($id);

        // Get the name of the product
        $name = $product->name;

        // Find the corresponding product in the Product table using the name and delete it
        $productToDelete = Product::where('name', $name)->first();
        if ($productToDelete) {
            $productToDelete->delete();
        }

        // Find the corresponding product detail by name and decrement its quantity
        $productDetail = ProductDetail::where('name', $name)->first();
        if ($productDetail) {
            // Reduce the quantity by 1 (assuming decrementing the quantity by 1 when deleting a product)
            if ($productDetail->quantity > 0) {
                $productDetail->quantity--;
                $productDetail->save();
            }
        }

        return redirect()->route('dashboard')->with('success', 'Product deleted successfully');
    }

    public function index()
    {
        $products = Product::select('id', 'name')->distinct()->get();

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

    public function getStockQuantity(Request $request)
    {
        $productName = $request->query('name');

        // Retrieve the product detail record based on the product name
        $productDetail = ProductDetail::where('name', $productName)->first();
        if ($productDetail) {
            // If the record exists, return its ID and the sum of quantities
            return response()->json([
                'id' => $productDetail->id,
                'quantity' => $productDetail->quantity,
            ]);
        } else {

            return response()->json(['error' => 'Product not found'], 404);
        }
    }

    public function dashboard()
    {
        $productCount = Product::count();
        $userCount = User::count();
        $orders = OrderItem::paginate(20);
        $orderCount = OrderItem::count();
        $products = ProductDetail::paginate(4);
        $route = route('dashboard');
        $users = User::all();

        return view('admindashboard.dashboard')->with([
            'productCount' => $productCount,
            'products' => $products,
            'route' => $route,
            'order' => $orders,
            'orderCount' => $orderCount,
            'userCount' => $userCount,
            'users' => $users,
        ]);
    }

    public function admindashboard()
    {
        $productCount = Product::count();
        $userCount = User::count();
        $orders = OrderItem::paginate(20);
        $orderCount = OrderItem::count();
        $products = ProductDetail::paginate(4);
        $route = route('dashboard');
        $users = User::all();

        return view('admindashboard.admindash')->with([
            'productCount' => $productCount,
            'products' => $products,
            'route' => $route,
            'order' => $orders,
            'orderCount' => $orderCount,
            'userCount' => $userCount,
            'users' => $users,
        ]);
    }

    public function allproducts()
    {
        $products = ProductDetail::paginate(3);

        $productQuantities = [];
        foreach ($products as $product) {
            $productName = $product->name;
            $quantity = Product::where('name', $productName)->count();
            $productQuantities[$productName] = $quantity;
        }

        return view('admindashboard.products')->with([
            'products' => $products,
            'productQuantities' => $productQuantities,
        ]);

    }

    public function landing()
    {
        // Retrieve distinct categories from ProductDetail table
        $categories = ProductDetail::distinct()->pluck('category');

        // Array to store category-wise products
        $categoryProducts = [];

        // Retrieve a certain number of products for each category
        foreach ($categories as $category) {
            // Retrieve products for the current category (e.g., 2 products)
            $products = ProductDetail::where('category', $category)->take(2)->get();

            // Store products in the array, keyed by category ID
            $categoryProducts[$category] = $products;
        }

        // Pass categories and products to the view
        return view('landing', compact('categories', 'categoryProducts'));
    }
}
