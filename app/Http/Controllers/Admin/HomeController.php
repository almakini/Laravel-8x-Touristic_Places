<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        return view('Admin.index');
    }
    public function login(){
        return view('Admin.login');
    }
    public function pass_forgotten(){
        return view('Admin.pass_forgotten');
    }
    public function logincheck(Request $request){
        if ($request->isMethod('post')){
            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);
            // $credentials = $request->only('email', 'password');
            if(Auth::attempt($credentials)){
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }
            return back()->withErrors([
                'email' => 'Username or password incorrect.'
            ]);
        }
        else{
            return view('Admin.login');
        }
    }
    public function logout(request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
