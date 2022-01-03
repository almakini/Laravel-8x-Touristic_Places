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
        <div>
            <a href="{{route('home')}}">Home </a>
            / Place Detail /
        </div><br><br>
        <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
            <h3>{{$place->title}}</h3>
            <p></p>
        </div>
        <div class="text-center">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    @foreach($images as $key=>$rs)
                    <div class="item {{$key === 0 ? 'active' : '' }}">
                        <a href="#"><img src="{{Storage::url($rs->image)}}" class="" width="100%" height="100%"
                                alt=""></a>
                        <div class="carousel-caption">

                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>
        <div class="row row-bottom-padded-md">
            <div class="">
                <div class="fh5co-blog animate-box">

                    <div class="blog-text">
                        <div class="prod-title">

                            <span class="posted_by">{{$place->city}}, {{$place->country}}</span>
                            <span class="comment">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>(145)
                                <span><a href=""><i class="icon-bubble2"></i></a>21</span>
                            </span>
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
