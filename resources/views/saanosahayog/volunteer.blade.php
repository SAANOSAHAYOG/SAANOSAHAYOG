@extends('saanosahayog.home')
@section('content')

    <section id="call-to-action" class="wow fadeIn">
        <div class="container text-center">
            <div class="breadcrumb-text">
                <h2>Volunteer</h2>
                <div class="bt-option">
                    <a href="#">Home</a>
                    <span>Volunteer</span>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                </div>
                <div class="col-lg-4">
                    <div class="cs-map">
                        <img src="{{ url('public/saanosahayog/img/volunteer.jpg') }}" width="455px" height="400px">
                    </div>
                    <div class="donate-title text-center">
                        <h4>Serve at the Thrift Stores</h4>
                        <a href="{{ url('/volunteer-form') }}" class="site-btn">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-4">
                </div>
            </div>
        </div>
    </section>
    
@endsection