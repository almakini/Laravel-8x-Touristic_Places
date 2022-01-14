<?php
    $settings = \App\Http\Controllers\MainController::getSetting();
?>
@extends('layouts.main')

@section('title', $settings->title . '| FAQs')

@section('description')
{{$settings->description}}
@endsection

@section('keywords', $settings->keywords)

@section('content')
<div id="fh5co-blog-section" class="fh5co-section-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                <h3>Frequently Asked Questions</h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach($faqs as $rs)
            <div class="card">
                <div class="card-header">
                    <a class="card-link" data-toggle="collapse" href="#collapseOne">
                        {{$rs->question}}
                    </a>
                </div>
                <div id="collapseOne" class="collapse show" data-parent="#accordion">
                    <div class="card-body">
                        {!!$rs->answer!!}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</div>

@endsection
