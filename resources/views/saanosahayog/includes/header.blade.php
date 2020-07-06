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
            <li class="active"><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/about-us') }}">About</a></li>
            <li><a href="{{-- {{ url('/team') }} --}}">Team</a></li>
            <li><a href="{{ url('/event') }}">Events</a></li>
            <li><a href="{{ url('/blog') }}">Blog</a></li>
            <li><a href="{{ url('/contact-us') }}">Contact</a></li>
          </ul>
        </nav>
        <a href="#" class="primary-btn top-btn" data-toggle="modal" data-target="#login"><i class="fa fa-user"></i> Login</a>
      </div>
      <div id="mobile-menu-wrap"></div>
    </div>
  </header>
  <!-- Header End -->

      <!--Login Section End-->
   
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="modal fade" role="dialog" id="login">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title">Login</h3>
                            </div>
            
                            <div class="modal-body">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="email">
                                </div>    
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="password">
                                </div>
            
                                <div class="modal-footer">
                                    <button type="submit" class="site-btn">Login</button>
                                </div>

                                <div class="col-md-12 text-center">
                                    <p>Don't have an account?<a href="#" class="ha-btn" data-toggle="modal" data-target="#register">Register</a></p>
                                    
                                </div>
                            </div>    
                        </div>
            
                    </div>
                </div>



            </div>
        </div>

        <div class="row">
            <div class="col-md-12">

                <div class="modal fade" role="dialog" id="register">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title">Register</h3>
                            </div>
            
                            <div class="modal-body">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="name">
                                </div>  
                                
                                <div class="form-group">
                                    <input type="text" name="address" class="form-control" placeholder="address">
                                </div>

                                <div class="form-group">
                                    <input type="number" name="phone" class="form-control" placeholder="phone">
                                </div>

                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="email">
                                </div>

                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="password">
                                </div>

                                <div class="form-group">
                                    <input type="password" name="conpassword" class="form-control" placeholder="confirm password">
                                </div>
            
                                <div class="modal-footer">
                                    <button type="submit" class="site-btn">Register</button>
                                </div>

                                <div class="col-md-12 text-center">
                                    <p>Already have an account?<a href="#" class="ha-btn" data-toggle="modal" data-target="#login">Login</a></p>
                                    
                                </div>
                            </div>    
                        </div>
            
                    </div>
                </div>



            </div>
        </div>


    </div>

    <!--Login Section End-->
