<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //返回HomePage
    public function index(){
        return view('index');
    }

    //點會員中心 --> 登入頁面
    public function login(){
        return view('auth.login');
    }

    

}
