<?php
use Illuminate\Support\Facades\Route;

    $settings = \App\Http\Controllers\MainController::getSetting();

	$parentCategories = \App\Http\Controllers\MainController::categoryList();
?>

@extends('layouts.main')

@section('title', $settings->title)

@section('content')
<div class="container">
    <div class="row profile">
        <div class="col-md-3">
            @include('Home.User._user_menu')
        </div>
        <div class="col-md-9">
            <div class="profile-content">
                @include('home.message')
                <table class="table table-striped table-bordered dataTable" role="grid"
                    aria-describedby="zero_config_info">
                    <thead>
                        <tr role="row">
                            <th><b>ID</b></th>
                            <th><b>Place</b></th>
                            <th><b>Subject</b></th>
                            <th><b>Review</b></th>
                            <th><b>Rate</b></th>
                            <th><b>Status</b></th>
                            <th><b>Date</b></th>
                            <th><b>Edit</b></th>
                            <th><b>Delete</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($reviews as $rs)
                        <tr role="row" class="odd">
                            <td>{{$rs->place->id}}</td>
                            <td>{{$rs->place->title}}</td>
                            <td>{{$rs->subject}}</td>
                            <td>{{$rs->review}}</td>
                            <td>{{$rs->rate}}</td>
                            <td>{{$rs->status}}</td>
                            <td>{{$rs->created_at}}</td>
                            <td><a href="{{route('user_review_edit', ['id'=>$rs->id])}}"
                                    class="me-2 mdi mdi-open-in-new"
                                    onclick="return !window.open(this.href, '', 'top=50 left=100 width=800, height=500')">Edit</a>
                            </td>

                            <td><a href="{{route('user_review_delete', ['id'=>$rs->id])}}"
                                    onclick="return confirm('Do you want to delete?')"
                                    class="me-2 mdi mdi-delete">Delete</a>
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
