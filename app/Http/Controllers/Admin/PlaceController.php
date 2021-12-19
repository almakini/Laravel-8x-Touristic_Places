<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Place;
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
            'parent_id' => $request->input('parent_id'),
            'title' => $request->input('title'),
            'keywords' => $request->input('keywords'),
            'status' => $request->input('status'),
            'description' => $request->input('description'),
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
    public function edit(Place $place, $id)
    {
        $places = DB::select('select * from places');
        // $place = DB::table('places')->distinct()->where('id', $id)->get();
        $place = place::find($id);
        return view('Admin.Places.edit_place', [
            'place' => $place,
            'places' => $places,
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
        $data->parent_id = $request->input('parent_id');
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->status = $request->input('status');
        $data->description = $request->input('description');
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
        $places = DB::select(
            'select * from places'
        );
        // print_r($places);
        // exit();
        return view('Admin.Places.add_place', ['places' => $places]);
    }
}
