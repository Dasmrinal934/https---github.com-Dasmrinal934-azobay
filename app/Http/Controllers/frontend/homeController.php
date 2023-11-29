<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;

class homeController extends Controller
{
    
    public function index(){
        $data=Product::all();
        return view('home',['products'=>$data]);
    }
}
