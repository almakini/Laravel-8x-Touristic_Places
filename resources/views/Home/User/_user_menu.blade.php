<div class="profile-sidebar">
    <div class="profile-usertitle">
        <div class="profile-userpic">
        </div>
        <div class="profile-usertitle-name">
            {{Auth::user()->name}}
        </div>
        <div class="profile-usertitle-job">
        </div>
    </div>
    <!-- END SIDEBAR USER TITLE -->
    <!-- SIDEBAR BUTTONS -->
    <!-- <div class="profile-userbuttons">
                    <button type="button" class="btn btn-success btn-sm">Follow</button>
                    <button type="button" class="btn btn-danger btn-sm">Message</button>
                </div> -->
    <!-- END SIDEBAR BUTTONS -->
    <!-- SIDEBAR MENU -->
    <div class="profile-usermenu">
        <ul class="nav">
            <li class="{{Route::currentRouteName() === 'user/profile' ? 'active' : '' }}">
                <a href="{{route('user_profile')}}"><i class="glyphicon glyphicon-home"></i>My Profile </a>
            </li>
            <li class="{{Route::currentRouteName() === 'user/place' ? 'active' : '' }}">
                <a href="{{route('user_places')}}"><i class="glyphicon glyphicon-user"></i>Places </a>
            </li>
            <li class="{{Route::currentRouteName() === 'user/review' ? 'active' : '' }}">
                <a href="{{route('user_reviews')}}"><i class="glyphicon glyphicon-ok"></i>Reviews </a>
            </li>
            <li class="{{Route::currentRouteName() === 'user/message' ? 'active' : '' }}">
                <a href="{{route('user_messages')}}"><i class="glyphicon glyphicon-flag"></i>Messages </a>
            </li>
            @php
            $userRoles = Auth::user()->roles->pluck('name')
            @endphp
            @if($userRoles->contains('admin'))
            <li class="">
                <a href="{{route('admin_index')}}"><i class="glyphicon glyphicon-flag"></i>Admin Panel </a>
            </li>
            @endif
            <li class="">
                <a href="{{route('admin_logout')}}" target="_blank"><i class="glyphicon glyphicon-flag"></i>Logout </a>
            </li>

        </ul>
    </div>
</div>
