<?php

namespace App\Http\Controllers;

use App\Models\Likey;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeyController extends Controller
{
    protected $productModel;
    protected $userModel;
    protected $likeModel;

    public function getUserLikeRequest(Request $request){
        $this->productModel = new Product();
        $this->likeModel = new Likey();

        //檢查是否有先登入才紀錄按讚
        if(Auth::check()){
            $this->productModel->setProdLikeAmount($request->prod_id);
            $this->likeModel->collectUserLike(Auth::user()->id, $request->prod_id);
        }else{
            //沒反應
            return redirect()->route('login');
        }

        return response()->json(['msg' => '成功接收產品id']);
    }


}
