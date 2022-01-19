<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        
        return view('Admin.Users.users', ['users' => $users]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        // $user = DB::select("select * from users where id = '$id'");
        return view('Admin.Users.edit_user', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user, $id)
    {
        // $data = DB::select('select * from users where id = '$id'');
        $data = User::find($id);
        
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->address = $request->input('address');
        if ($request->file('image') != null)
        {
            $data->image = Storage::putFile('profile-photos', $request->file('image'));
        }
        $data->save();

        return redirect()->intended('admin/user')->with('success', 'User information updated successfully.');
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
        return redirect()->intended('admin/user')->with('success', 'User Deleted Successfully.');
    }
    public function show($id)
    {
        $user = User::find($id);
        $roles = Role::all()->sortBy('name');
        return view('Admin.Users.user_show',
            [
                'user' => $user,
                'roles' => $roles,
            ]);
    }
    public function user_role($id)
    {
        $user = User::find($id);
        $roles = Role::all()->sortBy('name');
        return view('Admin.Roles.user_roles',
            [
                'user' => $user,
                'roles' => $roles,
            ]);
    }
    public function user_role_store(Request $request, User $user, $id)
    {
        $user = User::find($id);
        $role_id = $request->input('role_id');
        $user->roles()->attach($role_id);
        return redirect()->back()->with('success', 'Role added to user successfully.');
    }
    public function user_role_destroy(Request $request, User $user, $user_id, $role_id)
    {
        $user = User::find($user_id);
        $user->roles()->detach($role_id);
        return redirect()->back()->with('success', 'Role deleted from user successfully.');
    }
}
