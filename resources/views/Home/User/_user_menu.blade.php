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
            <li class="">
                <a href="{{route('admin_logout')}}"><i class="glyphicon glyphicon-flag"></i>Logout </a>
            </li>
        </ul>
    </div>
</div>
