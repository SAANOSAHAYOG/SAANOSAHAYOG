@extends('saanosahayog.main')
@section('content')

    <section id="call-to-action" class="wow fadeIn">
        <div class="container text-center">
            <div class="breadcrumb-text">
                <h2>Donate</h2>
                <div class="bt-option">
                    <a href="#">Home</a>
                    <span>Donate</span>
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
                        <h2>Schedule a Pickup</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form action="{{ route('storedonate') }}" method="POST" class="comment-form contact-form" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-lg-4">
                                <label>Name</label>
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
                            <div class="col-lg-6">
                                <label>What Are You Donation?</label>
                                <textarea name="donate" maxlength="500" rows="10" cols="30"></textarea>
                            </div>
                            <div class="col-lg-6">
                                <label>Send photos of your items(optional)</label>
                                <input type="file" name="image">
                            </div>
                            <div class="col-lg-12 text-center">
                                <button type="submit" class="site-btn">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-from-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="donate-title text-center">
                        <h4>Other ways to donate</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <hr>
            <br>
            <div class="row">
                <div class="col-lg-6 text-center">
                    <button class="site-btn">Drop Off</button>
                </div>
                <div class="col-lg-6 text-center">
                    <button class="site-btn">Cash Donation</button>
                </div>
            </div>
            <br>
            <hr>
            <div class="row">
                <div class="col-lg-1">
                    <img src="{{ url('public/saanosahayog/img/accept.png') }}" alt="" width="80px" height="50px">
                </div>
                <div class="col-lg-5">
                    <div class="donate-title">
                        <h4>We Accept</h4>
                    </div>
                    <ul>
                        <li>Furniture</li>
                        <li>Clothing</li>
                        <li>Home Décor</li>
                        <li>And More!</li>
                    </ul>
                </div>
                <div class="col-lg-1">
                    <img src="{{ url('public/saanosahayog/img/donotaccept.png') }}" alt="" width="80px" height="50px">
                </div>
                <div class="col-lg-5">
                    <div class="donate-title">
                        <h4>We Do Not Accept</h4>
                    </div>
                    <ul>
                        <li>Damaged Items</li>
                        <li>Non-working Items</li>
                        <li>Clothing that is Wet or Moldy</li>
                        <li>Recalled Items</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="donate-title text-center">
                        <h4>Donation Drives</h4>
                        <p>There are plenty of items out there worth a second chance! Help us keep more waste out of our landfills by holding a donation drive with your business, school, community, or organization.
                        Call or email us and we will help you with all the basics of scheduling and promoting your drive!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection