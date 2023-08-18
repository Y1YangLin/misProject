<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    
    protected $models = [
        'Product' => Product::class,
        'User' => User::class
    ];
    

    public function index(){
        return view('products.product');
    }

    public function show_Product_Detail(){
        return view('products.product-detail');
    }

    

}
