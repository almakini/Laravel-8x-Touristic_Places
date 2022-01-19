@extends('layouts.admin')

@section('title', $settings->title . ' | Welcome!')

@section('description')
{{$settings->description}}
@endsection

@section('keywords', $settings->keywords)

@section('content')
@include('Admin._content')
@endsection
