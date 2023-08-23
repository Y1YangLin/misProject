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
            
            $this->likeModel->collectUserLike(Auth::user()->id, $request->prod_id);

            if($this->likeModel->checkUserLikeHistory(Auth::user()->id, $request->prod_id)){
                // dd('');
                $this->productModel->addLikeAmount($request->prod_id);
                
            }else{
                $this->productModel->substractLikeAmount($request->prod_id);
            }
            
        }else{
        //沒有login
            return response()->json(['msg' => 'not login']);
        }

        return response()->json(['msg' => 'success get prod id']);
    }


}
