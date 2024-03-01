<?php
namespace App\Http\Controllers\product;
use App\Http\Controllers\Controller;

use App\Models\Product;

use Illuminate\Http\Request;

class ProductDetailsController extends Controller
{
    public function show($id)
    {
        $product = Product::find($id);

        return view('product.show', compact('product'));
    }
}

?>