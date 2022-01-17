<?php
use Illuminate\Support\Facades\Route;
    $settings = \App\Http\Controllers\MainController::getSetting();
	$parentCategories = \App\Http\Controllers\MainController::categoryList();
?>

@extends('layouts.main')

@section('title', $settings->title . ' | My Messages')

@section('content')
<div class="container">
    <div class="row myProfile"><br><br>
        <div class="col-md-3">
            @include('Home.User._user_menu')
        </div><br><br>
        <div class="col-md-9">
            <div class="myProfile-content">
                <div class="row mb-2 align-items-center" style="text-align:center;">
                    <h3>My Messages</h3>
                </div>
                @include('home.message')
                <table class="table table-striped table-bordered dataTable" role="grid"
                    aria-describedby="zero_config_info">
                    <thead>
                        <tr role="row">
                            <th><b>ID</b></th>
                            <th><b>Subject</b></th>
                            <th><b>Message</b></th>
                            <th><b>Admin Note</b></th>
                            <th><b>Delete</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($messages as $message)
                        <tr role="row" class="odd">
                            <td>{{$message->id}}</td>
                            <td>{{$message->subject}}</td>
                            <td>{{$message->message}}</td>
                            <td><a href="{{route('user_message_show', ['id'=>$message->id])}}"
                                    class="me-2 mdi mdi-open-in-new"
                                    onclick="return !window.open(this.href, '', 'top=50 left=100 width=800, height=350')"><i
                                        class="glyphicon glyphicon-new-window"></i></a>
                            </td>
                            <td><a href="{{route('user_message_delete', ['id'=>$message->id])}}"
                                    onclick="return confirm('Do you want to delete?')" class="me-2 mdi mdi-delete"><i
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
