<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Home.User.user_profile');
    }

    public function myreviews()
    {
        $reviews = Review::where('user_id', Auth::user()->id)->get();
        return view('Home.User.Reviews.user_reviews', ['reviews' => $reviews]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
    
    public function editMyReview($id)
    {
        $review = Review::find($id);
        return view('Home.User.Reviews.edit_review', ['review' => $review]);
    }

    public function deleteMyReview($id)
    {
        DB::table('reviews')->where('id', $id)->delete();
        return redirect()->intended('user/review')->with('success', 'Review Deleted Successfully!');
    }
    
    public function updateMyReview($id)
    {
        $data = Review::find($id);
        $data->category_id = $request->input('category_id');
        $data->title = $request->input('title');
        $data->user_id = Auth::id();
        $data->status = $request->input('status');
        $data->save();

        return redirect()->intended('admin/place');
    }
}
