@extends('saanosahayog.home')

@section('content')
    <section class="contact-from-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="donate-title text-center">
                        <h4>Welcome to User Dashborad</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <hr>
            <br>
            <div class="row">
                <div class="col-lg-6 text-center">
                    <a href="{{ url('/donate') }}"><button class="site-btn">Donate</button></a>
                </div>
                <div class="col-lg-6 text-center">
                    <a href="{{ url('/volunteer') }}"><button class="site-btn">Volunteer</button></a>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-6 text-center">
                    <a href="{{ url('/event') }}"><button class="site-btn">Events</button></a>
                </div>
                <div class="col-lg-6 text-center">
                    <a href="{{ url('/profile') }}"><button class="site-btn">Profile</button></a>
                </div>
            </div>
        </div>
    </section>
@endsection
