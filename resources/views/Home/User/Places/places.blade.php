<?php
use Illuminate\Support\Facades\Route;

    $settings = \App\Http\Controllers\MainController::getSetting();

	$parentCategories = \App\Http\Controllers\MainController::categoryList();
?>

@extends('layouts.main')

@section('title', $settings->title)

@section('content')
<div class="container">
    <div class="row myProfile"><br><br>
        <div class="col-md-3">
            @include('Home.User._user_menu')
        </div><br><br>
        <div class="col-md-9">
            <div class="myProfile-content">
                <div>
                    <form action="{{route('user_place_add')}}">
                        <button type="submit" class="btn btn-primary"
                            style="margin-left:10px; margin-bottom:15px; height:40px;">Add a place</button>
                    </form>
                </div>
                @include('home.message')
                <table class="table table-striped table-bordered dataTable" role="grid"
                    aria-describedby="zero_config_info">
                    <thead>
                        <tr role="row">
                            <th><b>ID</b></th>
                            <th><b>Category</b></th>
                            <th><b>Title</b></th>
                            <th><b>Image</b></th>
                            <th><b>Images gallery</b></th>
                            <th><b>Status</b></th>
                            <th><b>Edit</b></th>
                            <th><b>Delete</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($places as $place)
                        <tr role="row" class="odd">
                            <td>{{$place->id}}</td>
                            <td>
                                {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($place->category, $place->category->title)}}
                            </td>
                            <td>{{$place->title}}</td>
                            <td>
                                @if ($place->image)
                                <img src="{{Storage::url($place->image)}}" witdth="50" height="70" alt="">
                                @endif
                            </td>
                            <td><a href="{{route('user_place_gallery_show', ['place_id'=>$place->id])}}"
                                    class="me-2 mdi mdi-folder-multiple-image"
                                    onclick="return !window.open(this.href, '', 'top=50 left=100 width=800, height=500')"><i
                                        class="glyphicon glyphicon-picture"></i></a>
                            </td>
                            <td>{{$place->status}}</td>
                            <td><a href="{{route('user_place_edit', ['id'=>$place->id])}}" class=""><i
                                        class="glyphicon glyphicon-edit"></i></a>
                            </td>
                            <td><a href="{{route('user_place_delete', ['id'=>$place->id])}}"
                                    onclick="return confirm('Do you want to delete?')" class=""><i
                                        class="glyphicon glyphicon-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
