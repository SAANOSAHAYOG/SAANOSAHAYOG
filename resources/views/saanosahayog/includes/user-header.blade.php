 <header class="main-header">
        <!-- Logo -->
        <a href="" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>SAA</b>NO</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>SAANO</b>SAHAYOG</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">
              <li class="dropdown"><a  href="{{ url('/home') }}">
                            {{ Auth::user()->name }}
                        </a>
                      </li>
              <li class="dropdown">
                    <div class="pull-right">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                         <button class="btn btn-info buttondesign">Logout</button>
                      </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                     @csrf
                   </form>
                    </div>
                </li>
              </ul>
            </div>
          </nav>
        </header>
             