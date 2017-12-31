<div class="nav-icon">
    <a href="">
        <svg width="37px" height="24px" viewBox="0 0 37 24">
            <path class="path1" d="M0,3 L37,3" data-svg-origin="0 3" transform="matrix(0.8,0,0,1,0,0)" style="opacity: 1;"></path>
            <path class="path2" d="M0,12 L37,12" data-svg-origin="0 12" transform="matrix(1,0,0,1,0,0)" style="opacity: 1;"></path>
            <path class="path3" d="M0,21 L37,21" data-svg-origin="0 21" transform="matrix(0.6,0,0,1,0,0)" style="opacity: 1;"></path>
        </svg>
    </a>
</div>

<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @guest
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>