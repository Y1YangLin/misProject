<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaceCategoryController extends Controller
{
    //
    public function index(){
        return view('facetypes.facecategory');
    }

    public function photo(){
        return view('facetypes.photo');
    }

}
