@extends('layouts.admin')

@section('title', 'Adding Place')

@section('content')
<div class="card">
    <form class="form-horizontal" action="{{route('admin_place_create')}}" method="post">
        @csrf
        <div class="card-body">
            <h4 class="card-title">Add a place</h4>
            <div class="form-group row">
                <label for="lname" class="col-sm-3 text-end control-label col-form-label">Category</label>
                <div class="col-sm-9">
                    <select class="select2 form-select shadow-none select2-hidden-accessible" name="category_id"
                        style="">
                        @foreach($categories as $cat)
                        <option data-select2-id="3" value="{{$cat->id}}">{{$cat->title}}</option>
                        @endforeach
                        <option data-select2-id="3" value="0">Other Category</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="lname" class="col-sm-3 text-end control-label col-form-label">Title</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="title" id="lname" placeholder="Title">
                </div>
            </div>
            <div class="form-group row">
                <label for="lname" class="col-sm-3 text-end control-label col-form-label">Keywords</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="keywords" id="lname" placeholder="Keywords">
                </div>
            </div>
            <div class="form-group row">
                <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Description</label>
                <div class="col-sm-9">
                    <textarea name="description" class="form-control"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Detail</label>
                <div class="col-sm-9">
                    <textarea name="detail" class="form-control"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="lname" class="col-sm-3 text-end control-label col-form-label">Country</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="country" id="lname" placeholder="Keywords">
                </div>
            </div>
            <div class="form-group row">
                <label for="lname" class="col-sm-3 text-end control-label col-form-label">City</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="city" id="lname" placeholder="Keywords">
                </div>
            </div>
            <div class="form-group row">
                <label for="lname" class="col-sm-3 text-end control-label col-form-label">Address</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="address" id="lname" placeholder="Keywords">
                </div>
            </div>
            <div class="form-group row">
                <label for="lname" class="col-sm-3 text-end control-label col-form-label">Slug</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="slug" id="lname" placeholder="Keywords">
                </div>
            </div>
            <div class="form-group row">
                <label for="lname" class="col-sm-3 text-end control-label col-form-label">User ID</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="user_id" id="lname" placeholder="Keywords">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 text-end control-label col-form-label">Status</label>
                <div class="col-sm-9" data-select2-id="11">
                    <select class="select2 form-select shadow-none select2-hidden-accessible" name="status" style="">
                        <option data-select2-id="3">True</option>
                        <option data-select2-id="3">False</option>
                    </select>
                </div>
            </div>
        </div>
        <div style="text-align:center; float:right; margin-right:17px;" class="form-group">
            <button type="submit" class=" btn btn-primary" style="text-align:center;">Add</button>
        </div>
    </form>
</div>
@endsection
