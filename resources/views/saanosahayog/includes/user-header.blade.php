    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container">
            <div class="logo">
                <a href="{{ url('/home') }}">
                    <img src="{{ url('public/saanosahayog/img/logo.png') }}" alt="">
                </a>
            </div>
            <div class="nav-menu">
                <nav class="mainmenu mobile-menu">
                    
                    <ul>
                        <li class="nav-item dropdown"><a href="{{ url('/home') }}">
                            {{ Auth::user()->name }}
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                    
                </ul>
            </nav>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
    </header>
    <!-- Header End -->