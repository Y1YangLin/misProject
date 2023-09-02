<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    protected $productModel;
    protected $userModel;

    public function show_Product_page(){
        $this->productModel = new Product();
        // dd($this->productModel->getSelectProd(187));
        $data = [
            'male' => $this->productModel->getRandomProdWithAmount(30),
            'female' => $this->productModel->getRandomProdWithAmount(30),
            'kid' => $this->productModel->getRandomProdWithAmount(30),
            'recom' => $this->productModel->getRandomProdWithAmount(30)
        ];
               
        return view('products.product')->with('products', $data);
    }

    public function show_Product_Detail($name, $id){
        $this->productModel = new Product();

        $data = [
            'product' => $this->productModel->getSelectProd($id),
            'others' => $this->productModel->getRandomProdWithAmount(6)
        ];
        

        return view('products.product-detail')->with('data', $data);
    }

}
