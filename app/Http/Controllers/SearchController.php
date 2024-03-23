<?php

namespace App\Http\Controllers;

use App\Models\ProductDetail;
;
use App\Http\Controllers\Controller;


class SearchController extends Controller
{
    public function find()
    {	
    return view('Search');			
    }		
    public function findSearch()
    {			
        $search = request()->input("search");		
        $test = ProductDetail::where ( 'name', 'tag','LIKE', '%' . $search . '%' )->orWhere ( 'description', 'LIKE', '%' . $search . '%' )->get ();
    if (count ( $test ) > 0)
    return view ('Search')->withTest($test)->withQuery ($search);
    else
    return view ( 'Search' )->withMessage ( 'No Details found. Try to search again !' );		
    }
}
