<?php
    $settings = \App\Http\Controllers\MainController::getSetting();
?>
@extends('layouts.main')

@section('title', $settings->title . ' | FAQs')

@section('description')
{{$settings->description}}
@endsection

@section('keywords', $settings->keywords)

@section('content')
<div id="fh5co-blog-section" class="fh5co-section-gray" style="margin-top:150px">
    <div class="container">
        <div class="row" style="margin-top:50px;">
            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                <h3>Frequently Asked Questions</h3>
            </div>
        </div>
    </div>
    <div class="container">
        @foreach($faqs as $rs)
        <div class="row">
            <p>
            <h3><a style="color: #5a5a5a;" href="javascript:toggleElement('{{$rs->id}}')">{{$rs->question}}</a></h3>
            </p>
            <div id="{{$rs->id}}" style="display:none">
                <strong>{!!$rs->answer!!}</strong>
            </div>
        </div>
        @endforeach
    </div>
</div>
<script>
function toggleElement(id) {
    if (document.getElementById(id).style.display == 'none') {
        document.getElementById(id).style.display = '';
    } else {
        document.getElementById(id).style.display = 'none';
    }
}
</script>
@endsection
