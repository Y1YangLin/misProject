<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function index(){
        return view('products.product');
    }

    public function show_Product_Detail(){
        return view('products.product-detail');
    }

}
