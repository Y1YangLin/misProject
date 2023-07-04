<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite as FacadesSocialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class GoogleAuthController extends Controller
{
    public function redirect(){
        return FacadesSocialite::driver('google')->redirect();
    }

    public function callbackGoogle(){

        try{
            // 拿到google user的細節
            $google_user = FacadesSocialite::driver('google')->user();

            $user = User::where('google_id', $google_user->getId())->first();

            if(!$user){

                $new_user = User::create([
                    'name' => $google_user->getName(),
                    'email' => $google_user->getEmail(),
                    'google_id' => $google_user->getId()
                ]);

                Auth::login($new_user);

                return redirect()->intended('index');


            }else{

                Auth::login($user);
                
                return redirect()->intended('index');
            }


        }catch(\Throwable $th){
            dd('老鐵別急 發生了點問題呢' . $th->getMessage());
        }

    }

}
