<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Setting;
use App\Models\Message;
use App\Models\User;
use App\Models\Place;

class HomeController extends Controller
{
    public static function messages(){
        return Message::Limit(3)->orderByDesc('id')->get();
    }
    public function index(){
        $usersCount = User::all()->count();
        $placesCount = Place::all()->count();
        $smsCount = Message::where('Status', "New")->count();
        $settings = Setting::first();
        return view('Admin.index', [
            'settings' => $settings, 
            'usersCount' => $usersCount,
            'placesCount' => $placesCount,
            'smsCount' => $smsCount
        ]);
    }
    public function login(){
        return view('Admin.Users.login');
    }
    public function pass_forgotten(){
        return view('Admin.Users.pass_forgotten');
    }
    public function logincheck(Request $request){

        if ($request->isMethod('post')){
            $credentials = $request->only('email','password');
            if(Auth::attempt($credentials)){
                $request->session()->regenerate();
                return redirect()->intended('admin')->withSuccess('Signed In');
            }
            return back()->withErrors([
                'email' => 'Username or password incorrect.'
            ]);
        }
        else{
            return view('Admin.Users.login')->withSuccess('Login details are not valid.');
        }
    }
    public function logout(request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return view('Admin.Users.login');
    }
}
