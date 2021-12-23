<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Monarobase\CountryList\CountryListFacade;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Place;
use App\Models\Category;

class MainController extends Controller
{
    public static function categoryList()
    {
        return Category::where('parent_id','=', 0)->with('children')->get();
    }
    public function main(){
        $categories = DB::select('select * from categories');
        $places = DB::select('select * from places');
        return view('Home.main', [
            'places' => $places,
            'categories' => $categories,
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
