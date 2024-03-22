<?php

namespace App\Http\Controllers\product;

use App\Http\Controllers\Controller;

use App\Models\Product;
use App\Models\ProductDetail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductDetailsController extends Controller
{
    public function show($id)
    {
        $product = ProductDetail::with('reviews')->findOrFail($id);
        
        $user = Auth::user();
        
        $is_admin = false;

        if ($user->role == 'super_admin' || $user->role == 'admin') {
            $is_admin = true;
        }


        return view('product.show', compact('product', 'is_admin'));
    }



    public function getLaptops()
    {
        $products = ProductDetail::where('category', 'Laptops')->paginate(20);
        return view('categories.laptop', compact('products'));
    }
    public function getComputers()
    {
        $products = ProductDetail::where('category', 'Computers')->paginate(20);
        return view('categories.computers', compact('products'));
    }
    public function getAccessories()
    {
        $products = ProductDetail::where('category', 'Accessories')->paginate(20);
        return view('categories.accessories', compact('products'));
    }
    public function getMonitors()
    {
        $products = ProductDetail::where('category', 'Monitors')->paginate(20);
        return view('categories.monitors', compact('products'));
    }
    public function getAllInOne()
    {
        $products = ProductDetail::where('category', 'All-in-one')->paginate(20);
        return view('categories.all-in-one', compact('products'));
    }
}
