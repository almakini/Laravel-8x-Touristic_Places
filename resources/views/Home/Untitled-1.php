 <span style="text-align:center; padding: 20px;" class="col-md-4 col-lg-4 col-sm-4">
            <form action="{{route('getplace')}}" method="post">
                @csrf
                @livewire('search')
                @livewireScripts
                <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
            </form>
        </span>
        <span class="col-md-4 col-lg-4 col-sm-4" style="text-align:center;">
            <ul class="flexCenter sf-menu sf-js-enabled sf-arrows" id="fh5co-primary-menu" style="touch-action: pan-y;">
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
                    class="flexCenter {{Route::currentRouteName() === 'categories' ? 'active' : '' }}" tabindex="0">
                    <a>{{Auth::user()->name}}</a>
                    <ul class="fh5co-sub-menu">
                        <li class="flexCenter" tabindex="0">
                            <a href="{{route('user_profile')}}">My Profile </a>
                        </li>
                        <li class="flexCenter" tabindex="0">
                            <a href="{{route('user_places')}}">My Places </a>
                        </li>
                        <li class="flexCenter" tabindex="0">
                            <a href="{{route('user_reviews')}}">My Reviews </a>
                        </li>
                        <li class="flexCenter" tabindex="0">
                            <a href="{{route('user_messages')}}">My Messages </a>
                        </li>
                        @php
                        $userRoles = Auth::user()->roles->pluck('name')
                        @endphp
                        @if($userRoles->contains('admin'))
                        <li class="flexCenter" tabindex="0">
                            <a href="{{route('admin_index')}}">Admin Panel </a>
                        </li>
                        @endif
                        <li class="flexCenter" tabindex="0">
                            <a href="{{route('user_logout')}}">Logout</a>
                        </li>
                    </ul>
                </li>
                @endauth
            </ul>
        </span>