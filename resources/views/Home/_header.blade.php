<div class="sticky-wrapper" style="height:96px;">
    <!--Start of header-->
    <header id="fh5co-header-section" class="sticky-banner stuck" style="">
        <div class="container">
            <div class="nav-heer">
                <h1 id="" style="font-weight:700;float:left;padding:20px;font-size: 28px;text-transform:uppercase;"
                    class="col-md-4 col-lg-4 col-sm-4"><a href="{{route('home')}}">Baladi</a></h1>
                <span style="text-align:center; padding: 20px;" class="col-md-4 col-lg-4 col-sm-4">
                    <form action="{{route('getplace')}}" method="post">
                        @csrf
                        @livewire('search')
                        @livewireScripts
                        <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
                    </form>
                </span>
                <span class="col-md-4 col-lg-4 col-sm-4" style="text-align:center;">
                    <ul class="flexCenter sf-menu sf-js-enabled sf-arrows" id="fh5co-primary-menu"
                        style="touch-action: pan-y;">
                        @guest
                        <li class="flexCenter" tabindex="0">
                            <a>Login/Signup</a>
                            <ul class="fh5co-sub-menu">
                                <li class="subItem flexCenter" tabindex="0">
                                    <a href="{{route('login')}}">Login</a>
                                </li>
                                <li class="subItem flexCenter" tabindex="0">
                                    <a href="{{route('register')}}">Signup</a>
                                </li>
                            </ul>
                        </li>
                        @endguest
                        @auth
                        <li style="margin-right:10px;"
                            class="flexCenter {{Route::currentRouteName() === 'categories' ? 'active' : '' }}"
                            tabindex="0">
                            <a>{{Auth::user()->name}}</a>
                            <ul class="fh5co-sub-menu">
                                <li class="subItem flexCenter" tabindex="0">
                                    <a href="{{route('user_profile')}}">My Account</a>
                                </li>
                                <li class="subItem flexCenter" tabindex="0">
                                    <a href="{{route('user_logout')}}">Logout</a>
                                </li>
                            </ul>
                        </li>
                        @endauth
                    </ul>
                </span>
                <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
            </div>
        </div>
        <div class="nav-header" style="text-align:center">
            @include('Home._menu')
        </div>
    </header>
    <!-- end:header-top -->
</div>
