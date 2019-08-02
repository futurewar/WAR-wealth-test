<!-- Dropdown Structure -->
{{-- <ul id="userDropDown" class="dropdown-content">
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
                <a  href={{ url('/') }}>
                {{-- <p style="margin: 14px 0";></p> --}}
                    <img id="logoImage" src="/storage/images/icons/stanbic_logo.png">
                </a>
        
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul id="navMenu" class="brand-logo center hide-on-med-and-down">
                    @if (View::hasSection('about'))
                    <li class="active"><a href={{ "/about"}}>Standard Bank Group</a></li>
                    @else
                    <li><a id="inactive" href={{ "/about"}}>Standard Bank Group</a></li>
                    @endif @if(View::hasSection('value'))
                    <li class="active"><a href={{"/value"}}>Wealth Value Propositions</a></li>
                    @else
                    <li><a id="inactive" href={{"/value"}}>Wealth Value Propositions</a></li>
                    @endif
                </ul>
                <div>
        </nav>
   
        <ul class="sidenav" id="mobile-demo">
            <li><a href="/">HOME</a></li>
            <li><a href="">ABOUT</a></li>
            <li><a href="">SERVICE</a></li>
        </ul>
        