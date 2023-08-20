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

        $data = [
            'male' => $this->productModel->getRandomProdWithAmount(10),
            'female' => $this->productModel->getRandomProdWithAmount(10),
            'kid' => $this->productModel->getRandomProdWithAmount(10),
            'recom' => $this->productModel->getRandomProdWithAmount(10)
        ];
               
        return view('products.product')->with('products', $data);
    }

    public function show_Product_Detail($name, $id){
        $this->productModel = new Product();

        $data = $this->productModel->getSelectProd($id);
        

        return view('products.product-detail')->with('data', $data);
    }

    public function likeProd($u_id, $prod_id){ //對商品按讚



    }

}
