<div class="myProfile-sidebar">
    <div class="myProfile-usertitle">
        <div class="myProfile-userpic">
        </div><br><br>
        <div class="myProfile-usertitle-name">
            {{Auth::user()->name}}
        </div>
        <div class="myProfile-usertitle-job">
        </div>
    </div>
    <div class="myProfile-usermenu">
        <ul class="nav">
            <!-- glyphicon glyphicon-home -->
            <li class="{{Route::currentRouteName() === 'user/profile' ? 'active' : '' }}">
                <a href="{{route('user_profile')}}"><i class="glyphicon glyphicon-user"></i>My Profile </a>
            </li>
            <li class="{{Route::currentRouteName() === 'user/place' ? 'active' : '' }}">
                <a href="{{route('user_places')}}"><i class="glyphicon glyphicon-map-marker"></i>My Places </a>
            </li>
            <li class="{{Route::currentRouteName() === 'user/review' ? 'active' : '' }}">
                <a href="{{route('user_reviews')}}"><i class="glyphicon glyphicon-star-empty"></i>My Reviews </a>
            </li>
            <li class="{{Route::currentRouteName() === 'user/message' ? 'active' : '' }}">
                <a href="{{route('user_messages')}}"><i class="glyphicon glyphicon-envelope"></i>My Messages </a>
            </li>
            @php
            $userRoles = Auth::user()->roles->pluck('name')
            @endphp
            @if($userRoles->contains('admin'))
            <li class="">
                <a href="{{route('admin_index')}}"><i class="glyphicon glyphicon-list-alt"></i>Admin Panel </a>
            </li>
            @endif
            <li class="">
                <a href="{{route('user_logout')}}" target="_blank"><i class="glyphicon glyphicon-log-out"></i>Logout
                </a>
            </li>

        </ul>
    </div>
</div>
