<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\TestMode;
use App\view;
use Illuminate\Support\Facades\Route;
use Validator, Redirect;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\Input;
use App\Models\Product;

class SearchController extends Controller
{
    public function find()
    {	
    return view('Search');			
    }		
    public function findSearch()
    {			
        $search = request()->input("search");		
                //dd($search);
        $test = Product::where ( 'name', 'LIKE', '%' . $search . '%' )->orWhere ( 'description', 'LIKE', '%' . $search . '%' )->get ();
    if (count ( $test ) > 0)
    return view ('Search')->withTest($test)->withQuery ($search);
    else
    return view ( 'Search' )->withMessage ( 'No Details found. Try to search again !' );		
    }
}
