<!-- Header Section Begin -->
<header class="header-section">
    <div class="container">
        <div class="logo">
            <a href="{{ url('/') }}">
                <img src="{{ url('public/saanosahayog/img/logo.png') }}" alt="">
            </a>
        </div>
        <div class="nav-menu">
            <nav class="mainmenu mobile-menu">
                
                <ul>
                    {{--                         <li class="active"><a href="{{ url('/') }}">Home</a></li>
                    --}}                        <li><a href="{{ url('/about-us') }}">About</a></li>
                    <li><a href="{{ url('/event') }}">Events</a></li>
                    <li><a href="{{ url('/blog') }}">Blog</a></li>
                    <li><a href="{{ url('/contact-us') }}">Contact Us</a></li>
                    <li><a href="{{ route('login') }}"><i class="fa fa-user"></i> Login</a></li>
                    <li><form action="{{ route('search') }}" method="POST" class="search">
                        @csrf
                        <input type="text" name="query" />
                        <input type="submit" class="site-btn" value="Search" />
                    </form></li>
                </ul>
            </nav>
        </div>
    </div>
        <div id="mobile-menu-wrap"></div>
</header>
<!-- Header End -->