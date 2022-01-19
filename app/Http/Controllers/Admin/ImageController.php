<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Place;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Place $place, $place_id)
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $place_id)
    {
        $data = new Image;
        $data->title = $request->input('title');
        $data->image = Storage::putFile('image', $request->file('image'));
        $data->place_id = $place_id;
        $data->save();
        return redirect()->route('admin_image_show', ['place_id'=>$place_id])->with('success', 'Image Added Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image, Place $place, $place_id)
    {
        $place = Place::find($place_id);
        $images = Image::all()->where('place_id', $place_id);
        return view('Admin.Images.images_gallery', [
            'place' => $place,
            'images' => $images
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image, $place_id, $id)
    {
        DB::table('images')
            ->where('id', $id)
            ->delete();
        return redirect()->route('admin_image_show', [
            'place_id' => $place_id
        ])->with('success', 'Image Deleted Successfully.');
    }
    public function add(Place $place, $place_id)
    {
        $place = Place::find($place_id);
        return view('Admin.Images.add_image', [
            'place' => $place
        ]);
    }
}
