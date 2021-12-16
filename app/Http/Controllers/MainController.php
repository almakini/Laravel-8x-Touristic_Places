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
    public function search_place(){
        return view('Home.search_place');
    }
    public function places(){
        return view('Home.places');
    }
    public function signin(){
        return view('Home.signin');
    }
    public function signup(){
        return view('Home.signup');
    }
}
