<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use function PHPUnit\Framework\isNull;

class UsersController extends Controller
{

    public function editUserProfile(Request $request){

        $name = $request->name;
        $birthday = $request->bd;
        $email = $request->email;

        $userData = DB::table('users')->where('email', Auth::user()->email)->first();
        
        if(is_null($userData)){
            return redirect()->route('home')->with('message', '你是幽靈人口嗎 ??');
        }else{
            
            DB::table('users')->where('email', $userData->email)->update([
                'name' => $name,
                'birthday' => $birthday,
                'email' => $email
            ]);

            return redirect()->route('home')->with('message', '修改會員資料成功 :)');

        }

        

    }

    public function editUserPassword(Request $request){
        
        // dd($request->all());
        $oldPassword = $request->oldPwd;
        $password = $request->newPwd;
        $password_again = $request->newPwd2;
        
        if(Hash::check($oldPassword, Auth::user()->password)){
            
            $this->validate($request,[
                'newPwd' => 'required|min:8',
                'newPwd2' => 'required|same:newPwd'
            ]);

            $userData = DB::table('users')->where('email', Auth::user()->email)->first();

            if(is_null($userData)){
                return redirect()->route('home')->with('message', '你是幽靈人口嗎 ??');
            }else{

                DB::table('users')->where('email', Auth::user()->email)->update([
                    'password' => Hash::make($password)
                ]);

            }

            return redirect()->route('home')->with('message', '新密碼設定成功 :)');

        }else{
            return redirect()->route('home')->with('message', '舊密碼錯誤喔 韭菜');
        }
        
    }

    

}
