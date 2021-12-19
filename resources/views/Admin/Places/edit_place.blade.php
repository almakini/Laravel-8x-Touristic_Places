@extends('layouts.admin')

@section('title', 'Updating Place')

@section('content')
<div class="card">
    <form class="form-horizontal" action="{{route('admin_place_update', ['id'=>$place->id])}}" method="post">
        @csrf
        <div class="card-body">
            <h4 class="card-title">Update a place</h4>
            <div class="form-group row">
                <label for="lname" class="col-sm-3 text-end control-label col-form-label">Category</label>
                <div class="col-sm-9">
                    <select class="select2 form-select shadow-none select2-hidden-accessible" name="category_id"
                        style="">
                        @foreach($categories as $cat)
                        <option data-select2-id="3" value="{{$cat->id}}" @if ($cat->id == $place->category_id)
                            selected
                            @endif>{{$cat->title}}</option>
                        @endforeach
                        <option data-select2-id="3" value="0" @if ($place->category_id == 0)
                            selected
                            @endif>Other Category</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="lname" class="col-sm-3 text-end control-label col-form-label">Title</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="title" id="lname" placeholder="Title"
                        value="{{$place->title}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="lname" class="col-sm-3 text-end control-label col-form-label">Keywords</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="keywords" id="lname" placeholder="Keywords"
                        value="{{$place->keywords}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Description</label>
                <div class="col-sm-9">
                    <textarea name="description" class="form-control">{{$place->description}}</textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Detail</label>
                <div class="col-sm-9">
                    <textarea name="detail" class="form-control">{{$place->detail}}</textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="lname" class="col-sm-3 text-end control-label col-form-label">Country</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="country" id="lname" placeholder="Country"
                        value="{{$place->country}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="lname" class="col-sm-3 text-end control-label col-form-label">City</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="city" id="lname" placeholder="City"
                        value="{{$place->city}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="lname" class="col-sm-3 text-end control-label col-form-label">Address</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="address" id="lname" placeholder="Address"
                        value="{{$place->address}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="lname" class="col-sm-3 text-end control-label col-form-label">Slug</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="slug" id="lname" placeholder="Slug"
                        value="{{$place->slug}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="lname" class="col-sm-3 text-end control-label col-form-label">User ID</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="user_id" id="lname" placeholder="User ID"
                        value="{{$place->user_id}}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 text-end control-label col-form-label">Status</label>
                <div class="col-sm-9" data-select2-id="11">
                    <select class="select2 form-select shadow-none select2-hidden-accessible" name="status" style="">
                        <option data-select2-id="3" @if ($place->status == 'True') selected
                            @endif>True</option>
                        <option data-select2-id="3" @if ($place->status == 'False') selected
                            @endif>False</option>
                    </select>
                </div>
            </div>
        </div>
        <div style="text-align:center; float:right; margin-right:17px;" class="form-group">
            <button type="submit" class=" btn btn-primary" style="text-align:center;">Update</button>
        </div>

    </form>
</div>
@endsection
