<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;
use App\Models\Image;

class UserPlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Place $place)
    {
        $places = Place::where('user_id', Auth::id())->get();
        return view('Home.User.Places.places', ['places' => $places]);
    }

    /**
     * Show the form for creating a new resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = new Place;
        $img = new Image;
        
        $data->category_id = $request->input('category_id');
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->detail = $request->input('detail');
        $data->country = $request->input('country');
        $data->city = $request->input('city');
        $data->address = $request->input('address');
        if($request->file('image') != null)
        {
            $data->image = Storage::putFile('image', $request->file('image'));
            $img->title = 'mainPhoto';
            $img->image = Storage::putFile('image', $request->file('image'));
        }
        $data->slug = $request->input('slug');
        $data->user_id = Auth::id();
        $data->save();
        if($request->file('image') != null){
            $img->place_id = $data->id;
            $img->save();
        }

        return redirect()->intended('user/place')->with('success', 'Place added successfully.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function show(Place $place)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function edit(Place $place, Category $category, $id)
    {
        
        $categories = Category::with('children')->get();
        $place = Place::find($id);
        return view('Home.User.Places.edit_place', [
            'place' => $place,
            'categories' => $categories,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Place $place, $id)
    {
        $data = place::find($id);
        $img = new Image;
        $data->category_id = $request->input('category_id');
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->detail = $request->input('detail');
        $data->country = $request->input('country');
        $data->city = $request->input('city');
        $data->address = $request->input('address');
        if($request->file('image') != null)
        {
            $data->image = Storage::putFile('image', $request->file('image'));
            $img->title = 'mainPhoto';
            $img->image = Storage::putFile('image', $request->file('image'));
            $img->place_id = $id;
            $img->save();
        }
        $data->slug = $request->input('slug');
        $data->user_id = Auth::id();
        $data->save();

        return redirect()->intended('user/place')->with('success', 'Place Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     * @param  int  $id
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('places')
            ->where('id', $id)
            ->delete();
        return redirect()->intended('user/place')->with('success', 'Place Deleted successfully.');
    }
    //Add
    public function add(Request $request)
    {
        $categories = Category::with('children')->get();
        return view('Home.User.Places.add_place', ['categories' => $categories]);
    }

    //Place Detail
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function detail(Place $place, Category $category, $id)
    {
        $categories = Category::with('children')->get();
        $place = Place::find($id);
        return view('Home.place_detail', [
            'place' => $place,
            'categories' => $categories,
        ]);
    }
}
