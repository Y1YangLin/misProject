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
        /**處理使用者按讚或者取消按讚 */

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

                return response()->json(['msg' => 'successfully unlike items']);
            }
            
        }else{
        //沒有login
            return response()->json(['msg' => 'not login']);
        }

        return response()->json(['msg' => 'successfully like items']);
    }

    public function get_ratings(){
        $this->likeModel = new Likey();

        if(Auth::check()){
            $data = $this->likeModel->getUserLikeIds(Auth::user()->id);
            $json = [];

            foreach($data as $i){
                $json[$i] = 1;
            }

            
            return response()->json($json);
        }

        return response()->json([]);
    }

}
