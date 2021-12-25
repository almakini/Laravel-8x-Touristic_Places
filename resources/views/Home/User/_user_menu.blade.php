<div class="profile-sidebar">
    <!-- SIDEBAR USERPIC -->

    <!-- END SIDEBAR USERPIC -->
    <!-- SIDEBAR USER TITLE -->
    <div class="profile-usertitle">
        <div class="profile-userpic">
            <!-- <img src="{{asset('admin_assets')}}/images/users.png" class="" alt="" height="10" width="10"> -->
        </div>
        <div class="profile-usertitle-name">
            {{Auth::user()->name}}
        </div>
        <div class="profile-usertitle-job">
            Developer
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
            <li class="{{Route::currentRouteName() === 'contact-us' ? 'active' : '' }}">
                <a href="{{route('contact-us')}}">
                    <i class="glyphicon glyphicon-home"></i>
                    My Profile </a>
            </li>
            <li class="{{Route::currentRouteName() === 'contact-us' ? 'active' : '' }}">
                <a href="{{route('contact-us')}}">
                    <i class="glyphicon glyphicon-user"></i>
                    Places </a>
            </li>
            <li class="{{Route::currentRouteName() === 'contact-us' ? 'active' : '' }}">
                <a href="{{route('contact-us')}}">
                    <i class="glyphicon glyphicon-ok"></i>
                    Reviews </a>
            </li>
            <li class="{{Route::currentRouteName() === 'contact-us' ? 'active' : '' }}">
                <a href="{{route('contact-us')}}">
                    <i class="glyphicon glyphicon-flag"></i>
                    Messages </a>
            </li>
            <li class="{{Route::currentRouteName() === 'contact-us' ? 'active' : '' }}">
                <a href="{{route('contact-us')}}">
                    <i class="glyphicon glyphicon-flag"></i>
                    Logout </a>
            </li>
        </ul>
    </div>
    <!-- END MENU -->
</div>
