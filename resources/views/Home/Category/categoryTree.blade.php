<ul class="fh5co-sub-menu">
    @foreach($children as $subCat)
    @if(count($subCat->children))
    <li class="subItem flexCenter" tabindex="0"><a href="#">{{$subCat->title}}</a>

        @include('Home.Category.categoryTree', ['children'=>$subCat->children])
    </li>
    @else
    <li class="subItem flexCenter" tabindex="0"><a
            href="{{route('category_places', ['id'=>$subCat->id, 'slug'=>$subCat->title])}}">{{$subCat->title}}</a></li>
    @endif
    @endforeach
</ul>
