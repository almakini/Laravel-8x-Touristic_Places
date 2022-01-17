<?php
    $settings = \App\Http\Controllers\MainController::getSetting();
	$parentCategories = \App\Http\Controllers\MainController::categoryList();
?>

@extends('layouts.main')

@section('title', $settings->title)

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
@endsection

@section('content')
<div class="container">
    <div class="row myProfile"><br><br>
        <div class="col-md-3">
            @include('Home.User._user_menu')
        </div><br><br>
        <div class="col-md-9">
            <div class="myProfile-content">
                <div class="row mb-2 align-items-center" style="text-align:center;">
                    <h3>Add a Place</h3>
                </div>
                <div class="card">
                    <form class="form-horizontal" action="{{route('user_place_create')}}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="lname"
                                    class="col-sm-3 text-end control-label col-form-label">Category</label>
                                <div class="col-sm-9">
                                    <select class="cs-select cs-skin-border" name="category_id" style="">
                                        @foreach($categories as $cat)
                                        <option data-select2-id="3" value="{{$cat->id}}">
                                            {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($cat, $cat->title)}}
                                        </option>
                                        @endforeach
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
                                <label for="lname"
                                    class="col-sm-3 text-end control-label col-form-label">Keywords</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="keywords" id="lname"
                                        placeholder="Keywords">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="cono1"
                                    class="col-sm-3 text-end control-label col-form-label">Description</label>
                                <div class="col-sm-9">
                                    <textarea name="description" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Detail</label>
                                <div class="col-sm-9">
                                    <textarea name="detail" class="" id="summernote"></textarea>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname"
                                    class="col-sm-3 text-end control-label col-form-label">Country</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="country" id="lname"
                                        placeholder="Country">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-end control-label col-form-label">City</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="city" id="lname" placeholder="City">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname"
                                    class="col-sm-3 text-end control-label col-form-label">Address</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="address" id="lname"
                                        placeholder="Address">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-end control-label col-form-label">Image</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" name="image" id="lname" placeholder="Image">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-end control-label col-form-label">Slug</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="slug" id="lname" placeholder="Slug">
                                </div>
                            </div>
                        </div>
                        <div style="text-align:center; float:right; margin-right:17px;" class="form-group">
                            <button type="submit" class=" btn btn-primary" style="text-align:center;">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
$('#summernote').summernote({
    placeholder: 'Place Detail',
    tabsize: 2,
    height: 100
});
</script>
@endsection
