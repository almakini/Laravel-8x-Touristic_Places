<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Monarobase\CountryList\CountryListFacade;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Place;
use App\Models\Category;
use App\Models\Setting;

class MainController extends Controller
{
    public static function categoryList()
    {
        return Category::where('parent_id','=', 0)->with('children')->get();
    }
    public static function getSetting()
    {
        return Setting::first();
    }

    public function main(){
        $settings = Setting::first();$places = DB::select('select * from places');
        return view('Home.main', [
            'places' => $places,
            'settings' => $settings,
            'page' => 'home',
        ]);
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
    public function faq(){
        return view('Home.faq');
    }
    public function references(){
        return view('Home.references');
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
