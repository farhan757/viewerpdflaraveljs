<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewpdfController extends Controller
{
    //
    function index(Request $request) {
        if($request->readonly){
            return view('viewpdfreadonly');
        }else{
            return view('viewpdf');
        }
        
    }
}
