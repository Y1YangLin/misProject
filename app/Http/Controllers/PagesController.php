<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //返回HomePage
    public function index(){
        return view('index');
    }

    

}
