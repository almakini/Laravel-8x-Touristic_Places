@extends('layouts.main')

@section('title', 'Place Detail')

@section('description')
Discover The Beauty of Chad
@endsection

@section('keywords', '{{$place->keywords}}')

@section('top')
@include('Home._top')
@endsection

@section('content')
<div id="fh5co-blog-section" class="fh5co-section-gray ">
    <div class="container" style="width:95%">
        <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
            <h3>{{$place->title}}</h3>
            <p></p>
        </div>
        <div class="row row-bottom-padded-md">
            <div class="">
                <div class="fh5co-blog animate-box">
                    <div class="text-center">
                        @if ($place->image)
                        <img class="img-responsive"
                            style="display: block; margin-left: auto; margin-right: auto;width: 80%; height:550px;"
                            src="{{Storage::url($place->image)}}" alt="">
                        @endif
                    </div>
                    <div class="blog-text">
                        <div class="prod-title">

                            <span class="posted_by">{{$place->city}}, {{$place->country}}</span>
                            <span class="comment"><a href="#comments">21<i class="icon-bubble2"></i></a></span>
                            <h3><i>{!!$place->description!!}</i></h3>
                            <p>{!!$place->detail!!}</p>
                            <h3 id="comments">Comments</h3>
                        </div>
                        <div class="row">

                            <div class="col-md-11">
                                <div class="box-testimony animate-box">
                                    <blockquote>
                                        <span class="quote"><span><i class="icon-quotes-right"></i></span></span>
                                        <p>&ldquo;Far far away, behind the word mountains, far from the countries
                                            Vokalia and Consonantia, there live the blind texts. Separated they live in
                                            Bookmarksgrove right at the coast of the Semantics, a large language
                                            ocean.&rdquo;</p>
                                    </blockquote>
                                    <p class="author">John Doe, CEO <a href="http://freehtml5.co/"
                                            target="_blank">FREEHTML5.co</a> <span class="subtext">Creative
                                            Director</span></p>
                                </div>

                            </div>
                            <div class="col-md-11">
                                <div class="box-testimony animate-box">
                                    <blockquote>
                                        <span class="quote"><span><i class="icon-quotes-right"></i></span></span>
                                        <p>&ldquo;Far far away, behind the word mountains, far from the countries
                                            Vokalia and Consonantia, there live the blind texts.&rdquo;</p>
                                    </blockquote>
                                    <p class="author">John Doe, CEO <a href="http://freehtml5.co/"
                                            target="_blank">FREEHTML5.co</a> <span class="subtext">Creative
                                            Director</span></p>
                                </div>


                            </div>
                            <div class="col-md-11">
                                <div class="box-testimony animate-box">
                                    <blockquote>
                                        <span class="quote"><span><i class="icon-quotes-right"></i></span></span>
                                        <p>&ldquo;Far far away, behind the word mountains, far from the countries
                                            Vokalia and Consonantia, there live the blind texts. Separated they live in
                                            Bookmarksgrove right at the coast of the Semantics, a large language
                                            ocean.&rdquo;</p>
                                    </blockquote>
                                    <p class="author">John Doe, Founder <a href="#">FREEHTML5.co</a> <span
                                            class="subtext">Creative Director</span></p>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <h3>Leave a comment ...</h3>
                                <div class="form-group">
                                    <textarea name="" class="form-control" id="" cols="20" rows="1"
                                        placeholder="Your Comment"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="submit" value="Comment" class="btn btn-primary">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
