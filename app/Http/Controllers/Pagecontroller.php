<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pagecontroller extends Controller
{
    //

    public function index(){
    
       return view('pages.index');
    }

    public function about(){

        return view('pages.about');
    }

    public function feedback(){
    
        return view('pages.feedback');
    }
    public function feedbackview(){
    
        return view('pages.admin_feedback');
    }

    public function menu(){
    
        return view('pages.menu');
    }

    public function reservation(){
    
        return view('pages.reservation');
    }
}
