<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Monarobase\CountryList\CountryListFacade;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Place;
use App\Models\Category;
use App\Models\Setting;
use App\Models\Message;
use App\Models\Image;
use App\Models\Review;
use App\Models\FAQ;
use App\Models\Like;

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
    public static function mostVisitedAttractions()
    {
        return Place::where('status', '=', 'True')->Limit(4)->inRandomOrder()->get();
    }
    public static function hotels()
    {
        return Place::where('status', '=', 'True')->Limit(4)->orderByDesc('id')->get();
    }
    public static function towers()
    {
        return Place::where('category_id', 14)->where('status', '=', 'True')->Limit(4)->orderByDesc('id')->get();
    }
    public static function countReviews($id){
        return Review::where('place_id', $id)->where('status', '=', 'Active')->count();
    }
    public static function countLikes($id){
        return Like::where('place_id', $id)->count();
    }
    public static function checkLike($place_id){
        if(Auth::user()){
            return Like::where('user_id', Auth::user()->id)->where('place_id', $place_id)->count();
        }
        else
            return 0;
    }
    public static function avgReviews($id){
        return Review::where('place_id', $id)->where('status', '=', 'Active')->average('rate');
    }

    public function main(){
        $settings = Setting::first();
        $sliders = Place::select('title', 'image', 'id', 'slug')->where('status', '=', 'True')->Limit(3)->inRandomOrder()->get();
        $mostVisited = Place::where('status', '=', 'True')->Limit(6)->inRandomOrder()->get();
        $holidays = Place::where('status', '=', 'True')->Limit(3)->orderByDesc('id')->get();
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
    public function faq(){
        return view('Home.faq');
    }
    public function references(){
        return view('Home.references');
    }
    
    public function place_detail($id, $slug){
        $images = Image::where('place_id', $id)->get();
        $place = Place::find($id);
        $reviews = Review::where('place_id', $id)->get();
        $category = Category::where('id', $place->category_id)->get();
        $sameCat = Place::where('id', '!=', $id)->where('category_id', $place->category_id)->get();
        
        return view('Home.place_detail',
         [
            'place' => $place,
            'images' => $images,
            'category' => $category,
            'reviews' => $reviews,
            'sameCat' => $sameCat,
         ]
        );
    }
    public function profile_show(){
        return view('Home.User.user_profile');
    }
    public function place_like($id, $liked){

            if($liked == 1){
                $data = new Like;
                $data->user_id = Auth::user()->id;
                $data->place_id = $id;
                $data->save();
            }
            else{
                DB::table('likes')->where('user_id', Auth::user()->id)->where('place_id', $id)->delete();
            }
            return back();
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
        return redirect()->route('contact-us')->with('success', 'Your Message is received! We will be back to you later on.');
    }
    //Place
    public function getplace(Request $request){
        
        $search = $request->input('search');
        $count = Place::where('title', $request->input('search'))->where('status', '=', 'True')->get()->count();

        if($count == 1)
        {
            $place = Place::where('title', $request->input('search'))->where('status', '=', 'True')->first();
            return redirect()->route('place_detail',['id' => $place->id, 'slug'=>$place->slug]);
        }
        else {
            return redirect()->route('placeslist', ['search'=>$search]);
        }
    }
    public function placeslist($search){
        $places = Place::where('title', 'like', '%'. $search. '%')->where('status', '=', 'True')->get();
        return view('Home.search_places', ['search' => $search, 'places'=>$places]);
    }
    public function category_places($id, $slug){
        $places = Place::where('category_id', $id)->where('status', '=', 'True')->get();
        $category = Category::find($id);
        return view('Home.Category.category_places',
         [
            'places' => $places,
            'category' => $category
         ]
        );
    }
    public function destination_places($city){
        $places = Place::where('city', $city)->where('status', '=', 'True')->get();
        $mostVisited = Place::where('status', '=', 'True')->Limit(3)->inRandomOrder()->get();
        return view('Home.destination_places',
         [
            'places' => $places,
            'city' => $city,
            'mostVisited' => $mostVisited
         ]
        );
    }
    //FAQs
    public function faqs(FAQ $faqs){
        $faqs = FAQ::all()->sortBy('position');
        return view('Home.faqs',
         [
            'faqs' => $faqs
         ]
        );
    }
}
