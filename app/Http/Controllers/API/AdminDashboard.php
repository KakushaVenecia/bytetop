<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminDashboard extends Controller
{
    public function getallusers(){
        $customers = User::all();
        return view('admin.viewusers', ['customers'=> $customers] );
    }
}
