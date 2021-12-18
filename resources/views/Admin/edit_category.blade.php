@extends('layouts.admin')

@section('title', 'Updating Category')

@section('content')
<div class="card">
    <form class="form-horizontal" action="{{route('admin_category_update', ['id'=>$category->id])}}" method="post">
        @csrf
        <div class="card-body">
            <h4 class="card-title">Update a category</h4>
            <div class="form-group row">
                <label for="lname" class="col-sm-3 text-end control-label col-form-label">Parent</label>
                <div class="col-sm-9">
                    <select class="select2 form-select shadow-none select2-hidden-accessible" name="parent_id" style="">
                        <option data-select2-id="3" value="{{$category->parent_id}}">{{$category->title}}</option>
                        @foreach($categories as $cat)
                        <option data-select2-id="3" value="{{$cat->id}}" @if ($cat->id == $category->parent_id) selected
                            @endif>{{$cat->title}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="lname" class="col-sm-3 text-end control-label col-form-label">Title</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="title" id="lname" placeholder="Title"
                        value="{{$category->title}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="lname" class="col-sm-3 text-end control-label col-form-label">Keywords</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="keywords" id="lname" placeholder="Keywords"
                        value="{{$category->keywords}}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 text-end control-label col-form-label">Status</label>
                <div class="col-sm-9" data-select2-id="11">
                    <select class="select2 form-select shadow-none select2-hidden-accessible" name="status" style="">
                        <option data-select2-id="3" selected>{{$category->status}}</option>
                        <option data-select2-id="3">True</option>
                        <option data-select2-id="3">False</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Description</label>
                <div class="col-sm-9">
                    <textarea name="description" class="form-control">{{$category->description}}"</textarea>
                </div>
            </div>
        </div>
        <div style="text-align:center; float:right; margin-right:17px;" class="form-group">
            <button type="submit" class=" btn btn-primary" style="text-align:center;">Update</button>
        </div>

    </form>
</div>
@endsection
