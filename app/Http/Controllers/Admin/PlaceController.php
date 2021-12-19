<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Place;
use App\Models\Category;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $places = DB::select('select * from places');
        return view('Admin.Places.places', ['places' => $places]);
    }

    /**
     * Show the form for creating a new resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        DB::table('places')->insert([
            'category_id' => $request->input('category_id'),
            'title' => $request->input('title'),
            'keywords' => $request->input('keywords'),
            'description' => $request->input('description'),
            'detail' => $request->input('detail'),
            'country' => $request->input('country'),
            'city' => $request->input('city'),
            'address' => $request->input('address'),
            'slug' => $request->input('slug'),
            'user_id' => $request->input('user_id'),
            'status' => $request->input('status'),
        ]);
        return redirect()->intended('admin/place');
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
        $categories = DB::select('select * from categories');
        $place = Place::find($id);
        return view('Admin.Places.edit_place', [
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
        $data->category_id = $request->input('category_id');
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->detail = $request->input('detail');
        $data->country = $request->input('country');
        $data->city = $request->input('city');
        $data->address = $request->input('address');
        $data->slug = $request->input('slug');
        $data->user_id = $request->input('user_id');
        $data->status = $request->input('status');
        $data->save();

        return redirect()->intended('admin/place');
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
        return redirect()->intended('admin/place');
    }
    //Add
    public function add(Request $request)
    {
        $categories = DB::select(
            'select * from categories'
        );
        // print_r($places);
        // exit();
        return view('Admin.Places.add_place', ['categories' => $categories]);
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
        $categories = DB::select('select * from categories');
        $place = Place::find($id);
        return view('Home.place_detail', [
            'place' => $place,
            'categories' => $categories,
        ]);
    }
}
