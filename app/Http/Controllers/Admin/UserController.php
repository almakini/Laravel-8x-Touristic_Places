<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::select('select * from users');
        
        return view('admin/users', ['users' => $users]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = DB::table('users')
            ->where('id', $id)
            ->get();
        // $user = DB::select("select * from users where id = '$id'");
        return view('Admin.edit_user', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category, $id)
    {
        // $data = DB::select('select * from users where id = '$id'');
        $data = DB::table('users')
            ->where('id', $id)
            ->get();
        $data->id = $request->input('id');
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->save();

        return redirect()->intended('admin/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('users')
            ->where('id', $id)
            ->delete();
        return redirect()->intended('admin/users');
    }
}
