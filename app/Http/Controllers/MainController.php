<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Monarobase\CountryList\CountryListFacade;

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
        $countries = CountryListFacade::getList('en');

        return view('Home.search_place', compact('countries'));
    }
    public function places(){
        return view('Home.places');
    }
    public function place_details(){
        return view('Home.place_details');
    }
    public function signin(){
        return view('Home.signin');
    }
    public function signup(){
        return view('Home.signup');
    }
}
