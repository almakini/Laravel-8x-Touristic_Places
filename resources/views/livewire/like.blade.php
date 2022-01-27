 @auth @if($checkLike> 0)
 <a href="{{route('place_like', ['id'=>$place->id, 'liked'=>0])}}">
     <i id="myForm" class="fa fa-heart" style="font-size:20px;"></i></a>
 @else
 <a href="{{route('place_like', ['id'=>$place->id, 'liked'=>1])}}">
     <i id="myForm" class="fa fa-heart-o" style="font-size:20px;"></i></a>
 @endif
 @else
 <a href="{{route('place_like', ['id'=>$place->id, 'liked'=>0])}}">
     <i id="myForm" class="fa fa-heart-o" style="font-size:20px;"></i></a>
 @endauth
 &nbsp;
