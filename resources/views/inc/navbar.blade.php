<!-- Dropdown Structure -->
{{--
<ul id="userDropDown" class="dropdown-content">
    <li><a href="/index">Dashboard</a></li>
    <li> <a href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
        </form>
    </li>
</ul> --}}


<nav class="navbar-fixed">
        <div class="nav-wrapper">
            <a  href={{ url( '/') }}>
                {{-- <img id="logoImage" src="storage/images/icons/stanbic_logo.png"> --}}
                <img id="logoImage" src="/storage/images/icons/stanbic_logo.png">
            </a>
    
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul id="navMenu" class="brand-logo center hide-on-med-and-down">
                @if (View::hasSection('home'))
                <li class="active"><a href="/">HOME</a></li>
                @else
                <li><a href="/">HOME</a></li>
                @endif @if (View::hasSection('about'))
                <li class="active"><a href={{ "/about"}}>ABOUT</a></li>
                @else
                <li><a href={{ "/about"}}>ABOUT</a></li>
                @endif @if (View::hasSection('services'))
                <li class="active"><a href={{ "/services"}}>FRAMEWORK</a></li>
                @else
                <li><a href={{ "/framework"}}>FRAMEWORK</a></li>
                @endif
                {{-- <li><a href=""><i class="material-icons">search</i></a></li> --}}
            {{-- <li><a href="{{"/journey"}}">Journey</a></li> --}}
            </ul>
            <ul class="right hide-on-med-and-down">
                {{-- <li>
                <a href="{{"/signin"}}" id="signIn" class="waves-effect waves-light btn transparent" href="#">Sign In </a>
                </li>
                <li>
                    <a href="{{"/signup"}}"  id="signUp" class="waves-effect waves-light btn" href="#">Sign Up </a>
                </li> --}}
                <!-- Authentication Links -->
                {{-- @guest
                <li>
                    <a id="signIn" class="waves-effect waves-light btn transparent" href="{{ route('login') }}">{{ __('Sign
                        In') }}</a>
                </li>
                @if (Route::has('register'))
                <li>
                    <a id="signUp" class="waves-effect waves-light btn " href="{{ route('register') }}">{{ __('Sign Up') }}</a>
                </li>
                @endif @else
                <li>
                    <a id="username" class="dropdown-trigger" href="#" data-target="userDropDown">
                        {{ Auth::user()->first_name . " ". Auth::user()->last_name }}<span>Money Sensible</span>
                    </a>
                </li>
                <li>
                    <img src="/storage/images/profile_pictures/{{Auth::user()->profile_picture}}" class="avatar"><span style="margin-right:1.5em;"> </span>
                </li>
                @endguest --}}
            </ul>
            <div>
    </nav>
    
    <ul class="sidenav" id="mobile-demo">
        <li><a href="/">HOME</a></li>
        <li><a href={{ "/about"}}>ABOUT</a></li>
        <li><a href={{ "/framework"}}>FRAMEWORK</a></li>
    </ul>