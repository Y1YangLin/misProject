<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UsersController extends Controller
{
    public function index(){
        return view('pages.login');
    
        

    }

    public function about(){
        return view('users.membercenter');
    }

}
