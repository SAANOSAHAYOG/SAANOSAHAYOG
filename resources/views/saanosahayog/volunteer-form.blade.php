@extends('saanosahayog.home')
@section('content')

    <section id="call-to-action" class="wow fadeIn">
        <div class="container text-center">
            <div class="breadcrumb-text">
                <h2>Volunteer Form</h2>
                <div class="bt-option">
                    <a href="{{ url('/home') }}">Volunteer</a>
                    <span>Volunteer Form</span>
                </div>
            </div>
        </div>
    </section>

        @if(Session::has('success') && !empty(Session::get('success')))
      <ul>
        <div class="old">
          <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                 <i class="icon fa fa-check"></i> {{ Session::get('success')}}
              </div>
          
        </div>
      </ul>
      @endif
    
    <section class="contact-from-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Registration for Volunteer</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form action="{{ route('storevolunteer') }}" method="POST" class="comment-form contact-form" enctype="multipart/form-data">
                                {{ csrf_field() }}
                        <div class="row">
                            <div class="col-lg-4">
                                <label>Full Name</label>
                                <input type="text" name="name" placeholder="Name">
                            </div>
                            <div class="col-lg-4">
                                <label>Email</label>
                                <input type="text" name="email" placeholder="Email">
                            </div>
                            <div class="col-lg-4">
                                <label>Phone</label>
                                <input type="text" name="phone" placeholder="Phone">
                            </div>
                            <div class="col-lg-12">
                                <label>Address</label>
                                <input type="text" name="address" placeholder="Address">
                            </div>
                            <div class="col-lg-4">
                                <label>City</label>
                                <input type="text" name="city" placeholder="City">
                            </div>
                            <div class="col-lg-4">
                                <label>State</label>
                                <input type="text" name="state" placeholder="State">
                            </div>
                            <div class="col-lg-4">
                                <label>Zip Code</label>
                                <input type="text" name="zipcode" placeholder="Zip Code">
                            </div>
                            <div class="col-lg-12">
                                <label>How did you learn about SAANOSAHAYOG?</label>
                                <textarea name="learn" maxlength="500" rows="10" cols="30"></textarea>
                            </div>
                            <div class="col-lg-12 text-center">
                                <button type="submit" class="site-btn">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    @endsection