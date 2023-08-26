<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Likey extends Model
{
    use HasFactory;

    public function createNewRecord($u_id, $prod_id){

        DB::table('likeys')->insert([
            'user_id' => $u_id,
            'product_id' => $prod_id,
            'like_time' => Carbon::now()->toDateTimeString()
        ]);
    }

    public function checkUserLikeHistory($u_id, $prod_id){

        $data = DB::table('likeys')->where([
            ['user_id', $u_id],
            ['product_id', $prod_id]
        ])->first();

        if($data){
            return true;
        }

        return false;
    }

    public function removeUserLike($u_id, $prod_id){

        DB::table('likeys')->where([
            ['user_id', $u_id],
            ['product_id', $prod_id]
        ])->delete();

    }

    public function collectUserLike($u_id, $prod_id){
        
        //查詢是否user有商品有按讚紀錄
        if($this->checkUserLikeHistory($u_id, $prod_id)){
            $this->removeUserLike($u_id, $prod_id);
        }else{
            $this->createNewRecord($u_id, $prod_id);
        }
    }

    public function getUserLikeIds($u_id){
        $data = DB::table('likeys')->where('user_id', $u_id)->pluck('product_id')->first();

        
        
        return $data;
    }

    public function getlikedProds($u_id){
        $data = DB::table('likeys')->where('user_id', $u_id)->get();


        return $data;
    }

}
