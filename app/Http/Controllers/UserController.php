<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Message;
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
    //Review
    public function myreviews()
    {
        $reviews = Review::where('user_id', Auth::user()->id)->get();
        return view('Home.User.Reviews.user_reviews', ['reviews' => $reviews]);
    }
    public function editMyReview($id)
    {
        // $review = Review::find($id);
        // return view('Home.User.Reviews.edit_review', ['review' => $review]);
    }

    public function deleteMyReview($id)
    {
        DB::table('reviews')->where('id', $id)->delete();
        return back()->with('success', 'Review Deleted Successfully!');
    }
    
    public function updateMyReview(Request $request, $id)
    {
        // $reviews = Review::where('user_id', Auth::user()->id)->get();
        // $data = Review::find($id);
        // $data->subject = $request->input('subject');
        // $data->review = $request->input('review');
        // $data->rate = $request->input('rate');
        // $data->save();

        // return view('Home.User.Reviews.user_reviews', ['reviews' => $reviews])->with('success', 'Review Updated Successfully!');
    }
    //Message
    public function mymessages()
    {
        $messages = Message::where('email', Auth::user()->email)->get();
        return view('Home.User.Message.user_messages', ['messages' => $messages]);
    }
    public function edit_mymessage($id)
    {
        // $review = Review::find($id);
        // return view('Home.User.Message.edit_message', ['review' => $review]);
    }

    public function delete_mymessage($id)
    {
        DB::table('messages')->where('id', $id)->delete();
        return back()->with('success', 'Message Deleted Successfully!');
    }
    public function show_mymessage($id)
    {
        $message = Message::find($id);
        return view('Home.User.Message.message_show', ['message'=>$message]);
    }
    
    public function update_mymessage(Request $request, $id)
    {
        // $reviews = Review::where('user_id', Auth::user()->id)->get();
        // $data = Review::find($id);
        // $data->subject = $request->input('subject');
        // $data->review = $request->input('review');
        // $data->rate = $request->input('rate');
        // $data->save();

        // return view('Home.User.Reviews.user_reviews', ['reviews' => $reviews])->with('success', 'Review Updated Successfully!');
    }
    public function logout(request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return back();
    }
}
