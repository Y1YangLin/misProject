<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FaceCategoryController extends Controller
{
    //
    public function index(){
        return view('facetypes.facecategory');
    }

    public function photo(){
        
        if(Auth::check()){
            return view('facetypes.photo');
        }

        return redirect()->route('login');
    }

    public function analysis(){

        $base64_data=$_POST["face"];
        $url = 'https://api-cn.faceplusplus.com/facepp/v1/skinanalyze';
        $data = array('api_key' => 'P3C9xetFaMg7qlRGf9NozP4jGLS5JnqP', 
                'api_secret' => '3raUqihlSijQP7QVrIwEXC7_QGHeZRWD',
                'image_base64' => $base64_data);

        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data)
            )
        );

        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        if ($result === FALSE) { echo "try again";}
        
        $result=json_decode($result,true);
        $type=$result['result']['skin_type']['skin_type'];

        // TODO: 存資料庫-膚質分析結果
        switch ($type) {
            case 0:
                echo "油性皮膚";
                break;
            case 1:
                echo "乾性皮膚";
                break;
            case 2:
                echo "中性皮膚";
                break;
            case 3:
                echo "混和性皮膚";
                break;
        }
    }

}
