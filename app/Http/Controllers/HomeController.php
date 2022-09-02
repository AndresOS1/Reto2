<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class HomeController extends Controller
{
    //
    public function index(){
        if(Auth()->user()){
            return view('dashboard');
        }else{
            return redirect()->route('verLogin');
        }

    }
    
}
