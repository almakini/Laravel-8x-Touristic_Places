@foreach($children as $subCat)
<ul class="subLevel fh5co-sub-menu">
    @if(count($subCat->children))
    <li class="subItem flexCenter" tabindex="0"><a href="#">{{$subCat->title}}</a>
    </li>
    <ul class="subLevel fh5co-sub-menu">
        @include('Home.categoryTree', ['children'=>$subCat->children])
    </ul>
    @else
    <li><a href="#">{{$subCat->title}}</a></li>
    @endif
</ul>
@endforeach
