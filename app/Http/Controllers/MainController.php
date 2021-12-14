<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function main(){
        return view('Home.main');
    }
    public function about(){
        return view('Home.about');
    }
    public function contact(){
        return view('Home.contact-us');
    }
}
