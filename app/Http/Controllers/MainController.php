<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Monarobase\CountryList\CountryListFacade;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Place;
use App\Models\Category;
use App\Models\Setting;
use App\Models\Message;
use App\Models\Image;
use App\Models\Review;
use App\Models\FAQ;

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
        $settings = Setting::first();
        $sliders = Place::select('title', 'image', 'id', 'slug')->Limit(4)->get();
        $mostVisited = Place::select()->Limit(4)->inRandomOrder()->get();
        $holidays = Place::select()->Limit(4)->orderByDesc('id')->get();
        return view('Home.main', [
            'sliders' => $sliders,
            'settings' => $settings,
            'page' => 'home',
            'mostVisited' => $mostVisited,
            'holidays' => $holidays
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
    public static function countReviews($id){
        return Review::where('place_id', $id)->where('status', '=', 'Active')->count();
    }
    public static function avgReviews($id){
        return Review::where('place_id', $id)->where('status', '=', 'Active')->average('rate');
    }
    public function place_detail($id, $slug){
        $images = Image::where('place_id', $id)->get();
        $place = Place::find($id);
        $reviews = Review::where('place_id', $id)->where('status', '=', 'Active')->get();
        $category = Category::where('id', $place->category_id)->get();
        
        return view('Home.place_detail',
         [
            'place' => $place,
            'images' => $images,
            'category' => $category,
            'reviews' => $reviews
         ]
        );
    }
    public function signin(){
        return view('Home.signin');
    }
    public function signup(){
        return view('Home.signup');
    }
    public function sendmessage(Request $request){
        $data = new Message();
        $data->name = $request->input('name');
        $data->phone = $request->input('phone');
        $data->email = $request->input('email');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->save();
        // $session::flash('message', 'This is a message!');
        return redirect()->route('contact-us')->with('success', 'Your Message is received! You will back to you later on.');
    }
    public function getplace(Request $request){
        
        $search = $request->input('search');
        $count = Place::where('title', $request->input('search'))->get()->count();

        if($count == 1)
        {
            $place = Place::where('title', $request->input('search'))->first();
            return redirect()->route('place_detail',['id' => $place->id, 'slug'=>$place->slug]);
        }
        else {
            return redirect()->route('placeslist', ['search'=>$search]);
        }
    }
    public function placeslist($search){
        $places = Place::where('title', 'like', '%'. $search. '%')->get();
        return view('Home.search_places', ['search' => $search, 'places'=>$places]);
    }
    public function category_places($id, $slug){
        $places = Place::where('category_id', $id)->get();
        $category = Category::find($id);
        return view('Home.Category.category_places',
         [
            'places' => $places,
            'category' => $category
         ]
        );
    }
    public function faqs(FAQ $faqs){
        $faqs = FAQ::all()->sortBy('position');
        return view('Home.faqs',
         [
            'faqs' => $faqs
         ]
        );
    }
}
