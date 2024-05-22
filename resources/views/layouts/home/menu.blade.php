<div class="menu-global">
    <div class="menu-left">
        <img src="{{url('asset/home/zho-logo.png')}}" class='logo' />
    </div>
    <div class="menu-right">
        <div class="topnav" id="myTopnav">
            <a href="{{ route('hoome') }}" class="{{ request()->is('/') ? 'active' : ''}}">Home</a>
            <a href="{{ route('company') }}" class="{{ request()->is('company') ? 'active' : ''}}">Company</a>
            <a href="{{ route('place') }}" class="{{ request()->is('place') ? 'active' : ''}}">Place</a>
            <a href="{{ route('equipment') }}" class="{{ request()->is('equipment') ? 'active' : ''}}">Equipment</a>
            <a href="{{ route('suggestion') }}" class="{{ request()->is('suggestion') ? 'active' : ''}}">Suggestion</a>
            <a href="{{ route('entertainment') }}"
                class="{{ request()->is('entertainment') ? 'active' : ''}}">Entertainment</a>
            <a href="{{ route('catering') }}" class="{{ request()->is('catering') ? 'active' : ''}}">Catering</a>
            <a href="{{ route('aboutus') }}" class="{{ request()->is('aboutus') ? 'active' : ''}}">About us</a>
            @guest
            @if (Route::has('login'))
            <a href="{{ route('login') }}">Sign in</a>
            @endif

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    @can('Admin')
                    <a class="dropdown-item" href="{{ route('dashboard') }}">
                        Dashboard
                    </a>
                    <a class="dropdown-item" href="{{ route('admin_verification') }}">
                        Verifications
                    </a>
                    @endcan
                    <a class="dropdown-item" href="{{ route('my_profile') }}">
                        Profile
                    </a>
                    @can('Client')
                    <a class="dropdown-item" href="{{ route('my_wishlist') }}">
                        My wishlist
                    </a>
                    <a class="dropdown-item" href="{{ route('my_posts') }}">
                        My posts
                    </a>
                    @endcan
                    @can('Admin')
                    <a class="dropdown-item" href="{{ route('all_posts') }}">
                        All posts
                    </a>
                    <a class="dropdown-item" href="{{ route('all_messages') }}">
                        All messages
                    </a>
                    @endcan
                    @can('Client')
                    <a class="dropdown-item" href="{{ route('contactus') }}">
                        Contact us
                    </a>
                    <a class="dropdown-item" href="{{ route('my_messages') }}">
                        My messages
                    </a>
                    @endcan
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                </div>
            </li>
            @endguest
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </div>
</div>