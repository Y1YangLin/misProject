<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //返回HomePage
    public function index(){
        return view('index');
    }

    public function showcontactform(){

        return view('pages.contact');
    }

    public function getcontactform(Request $request){

        dd($request);

    }


}
