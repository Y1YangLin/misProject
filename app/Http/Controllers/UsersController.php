<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class UsersController extends Controller
{
    
    public function editUserProfile(Request $request){

        dd($request->all());

    }

    public function editUserPassword(Request $request){
        
        dd($request->all());
        
        
    }

    

}
