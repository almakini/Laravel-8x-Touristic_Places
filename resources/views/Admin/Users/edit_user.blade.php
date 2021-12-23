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
        </div>
        <div style="text-align:center; float:right; margin-right:17px;" class="form-group">
            <button type="submit" class=" btn btn-primary" style="text-align:center;">Update</button>
        </div>

    </form>
</div>
@endsection
