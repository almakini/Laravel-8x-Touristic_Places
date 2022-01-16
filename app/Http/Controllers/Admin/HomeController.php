<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('admin');
    // }
    public function index(){
        return view('Admin.index');
    }
    public function login(){
        return view('Admin.Users.login');
    }
    public function pass_forgotten(){
        return view('Admin.Users.pass_forgotten');
    }
    public function logincheck(Request $request){
        if ($request->isMethod('post')){
            $admin = DB::table('users')->where('id', 1)->get();
            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);
            if(Auth::attempt($credentials)){
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }
            return back()->withErrors([
                'email' => 'Username or password incorrect.'
            ]);
        }
        else{
            return view('Admin.Users.login');
        }
    }
    public function logout(request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->intended('');
    }
}
