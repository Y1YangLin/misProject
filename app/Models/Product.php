<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;

    public function getAllProd(){

        $data = DB::table('products')->get();
        
        return $data;
    }

    public function getSelectProd($id){
        $data = DB::table('products')->where('id', $id)->first();

        return $data;
    }

    public function getProdWithKeyword($keyword){  //以關鍵字搜尋產品
        //Argument $keyword : String
        // $data =  DB::table('products');
        
    
        // return $data;
    }

    public function getProdWithFacecat($face_id){ //以膚質推薦產品

    }

    public function getRandomProd(){ //隨機推薦產品
        $data = DB::table('products')->inRandomOrder();
    
        return $data;
    }

    /**php overloading must using magic methods */
    public function getRandomProdWithAmount($amount){
        $data = DB::table('products')->inRandomOrder()->limit($amount)->get();

        return $data;
    }

    public function getProdWithPriceRange($begin, $end){ //以價格區間取得產品

    }

    public function setProdLikeAmount($id){

        $data = DB::table('products')->where('id', $id)->first();
        $curr_likes = $data->likeyAmount;

        DB::table('products')->where('id', $id)->update(['likeyAmount' => $curr_likes + 1]);
    

    }

}
