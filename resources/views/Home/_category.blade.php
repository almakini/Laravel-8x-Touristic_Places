<?php
	$parentCategories = \App\Http\Controllers\MainController::categoryList();
?>
<ul class="fh5co-sub-menu">
    <!-- @if (!isset($page)) show-on-click @endif -->
    @foreach($parentCategories as $parent)
    <li class="subItem flexCenter" tabindex="0">
        <a>{{$parent->title}}</a>
        @if(count($parent->children))
        @include('Home.categoryTree', ['children'=>$parent->children])
        @endif
    </li>
    @endforeach
</ul>
