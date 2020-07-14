@extends('saanosahayog.main')
@section('content')

	<section id="call-to-action" class="wow fadeIn">
        <div class="container text-center">
            <div class="breadcrumb-text">
                <h2>Blog</h2>
                <div class="bt-option">
                    <a href="#">Home</a>
                    <span>Blog</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section Begin -->
    <section class="blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                	@foreach ($getblog as $blog)
                    <div class="row">
                        <div class="col-md-3">
                            <div class="blog-item">
                            	<div class="blog-image set-bg">
                            		<img src="{{ url('/uploads/'.$blog->image) }}" alt="">
                            	</div>
                                <div class="bi-text">
                                    <h5><a href="{{ url('blog-detail/'.$blog->id) }}">{{ $blog->title }}</a></h5>
                                    <span><i class="fa fa-clock-o"></i> {{ $blog->date }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                     @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

@endsection