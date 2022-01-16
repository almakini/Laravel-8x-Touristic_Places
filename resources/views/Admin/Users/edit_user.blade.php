@extends('layouts.admin')

@section('title', 'Editing User')

@section('content')
<div class="card">
    <form class="form-horizontal" action="{{route('admin_user_update', ['id'=>$user->id])}}" method="post">
        @csrf
        <div class="card-body">
            <h4 class="card-title">Edit a user</h4>
            <div class="form-group row">
                <label for="lname" class="col-sm-3 text-end control-label col-form-label">ID</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="id" id="lname" placeholder="ID" value="{{$user->id}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="lname" class="col-sm-3 text-end control-label col-form-label">Name</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="name" id="lname" placeholder="Name"
                        value="{{$user->name}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="lname" class="col-sm-3 text-end control-label col-form-label">Email</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="email" id="lname" placeholder="Name"
                        value="{{$user->email}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="lname" class="col-sm-3 text-end control-label col-form-label">Phone</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="phone" id="lname" placeholder="Phone"
                        value="{{$user->phone}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="lname" class="col-sm-3 text-end control-label col-form-label">Address</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="address" id="lname" placeholder="Address"
                        value="{{$user->address}}">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="lname" class="col-sm-3 text-end control-label col-form-label">Image</label>
            <div class="col-sm-9">
                <input type="file" class="form-control" name="image" id="lname" placeholder="Image">
                @if ($user->profile_photo_path)
                <div style="margin-top:4px;"><img src="{{Storage::url($user->profile_photo_path)}}" height="70" alt="">
                </div>
                @endif
            </div>
        </div>
        <div style="text-align:center; float:right; margin-right:17px;" class="form-group">
            <button type="submit" class=" btn btn-primary" style="text-align:center;">Update</button>
        </div>

    </form>
</div>
@endsection
