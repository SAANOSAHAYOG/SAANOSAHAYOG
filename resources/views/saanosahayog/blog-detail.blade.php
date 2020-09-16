@extends('saanosahayog.main')
@section('content')

<section id="call-to-action" class="wow fadeIn">
        <div class="container text-center">
            <div class="breadcrumb-text">
                <h2>Blog Detail</h2>
                <div class="bt-option">
                    <a href="{{ url('/') }}">Blog</a>
                    <span>Blog Detail</span>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-section spad">
            <div class="container">
                <div class="row">
                	@foreach ($getblog as $blog)
                    <div class="col-lg-8">
                            <div class="bi-text">
                                    <h2>{{ $blog->title }}</h2>
                                    <span><i class="fa fa-clock-o"></i> {{ $blog->date }}</span>
                                    <p>{!! $blog->description !!}</p>
                               </div>
                    </div>
                    <div class="col-lg-4">
                    	<img src="{{ url('/uploads/'.$blog->image) }}" alt="">
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

@endsection