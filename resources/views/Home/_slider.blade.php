<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        @foreach($sliders as $key=>$rs)
        <div class="item {{$key === 0 ? 'active' : '' }}">
            <a href="{{route('place_detail', ['id'=>$rs->id, 'slug'=>$rs->slug])}}"><img
                    src="{{Storage::url($rs->image)}}" class="" width="100%" height="" alt=""></a>
            <div class="carousel-caption">
                <h3 style="color:white">{{$rs->title}}</h3>
                <p></p>
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
