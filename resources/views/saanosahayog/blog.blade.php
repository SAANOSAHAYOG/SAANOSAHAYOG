@extends('saanosahayog.main')
@section('content')

	<section id="call-to-action" class="wow fadeIn">
        <div class="container text-center">
            <div class="breadcrumb-text">
                <h2>Blog</h2>
                <div class="bt-option">
                    <a href="{{ url('/') }}">Home</a>
                    <span>Blog</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section Begin -->
    <section class="blog-section spad">
        <div class="container">
            <div class="row">
                    <div class="col-lg-6">
                        <div class="latest-item set-bg large-item" style="background-image: url('public/saanosahayog/img/related-post/related-post-1.jpg')">
                            <div class="li-tag">Marketing</div>
                            <div class="li-text">
                                <h4><a href="#">Improve You Business Cards And Enchan Your Sales</a></h4>
                                <span><i class="fa fa-clock-o"></i> 19th May, 2019</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="latest-item set-bg" style="background-image: url('public/saanosahayog/img/related-post/related-post-2.jpg')">
                            <div class="li-tag">Experience</div>
                            <div class="li-text">
                                <h5><a href="#">All users on MySpace will know that there are millions of people out there.</a></h5>
                                <span><i class="fa fa-clock-o"></i> 19th May, 2019</span>
                            </div>
                        </div>
                        <div class="latest-item set-bg" style="background-image: url('public/saanosahayog/img/related-post/related-post-3.jpg')">
                            <div class="li-tag">Marketing</div>
                            <div class="li-text">
                                <h5><a href="#">A Pocket PC is a handheld computer, which features many of the same capabilities.</a></h5>
                                <span><i class="fa fa-clock-o"></i> 19th May, 2019</span>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>
    <!-- Blog Section End -->

@endsection