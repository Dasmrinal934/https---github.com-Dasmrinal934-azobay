<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function index()
    {
        return view('');
    }
    function productDetails(){
        return view('product-details');
    }
}
