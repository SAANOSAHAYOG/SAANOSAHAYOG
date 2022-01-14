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
<section class="schedule-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="schedule-tab">    
                <div class="tab-content">
                    <div class="tab-pane active" id="tabs-1" role="tabpanel">
                        <div class="st-content">
                            <div class="container">
                                        <div class="row">
                @foreach ($getblog as $blog)
                    <div class="col-lg-3">
                                        <div class="sc-pic">
                                            <img src="{{ url('/uploads/'.$blog->image) }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="sc-text">
                                            <h4>{{ $blog->title }}</h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <ul class="sc-widget">
                                            <li><i class="fa fa-clock-o"></i> {{ $blog->date}}
                                                </li>
                                            <li><i class="fa fa-hand-o-up"><a href="{{ url('blog-detail/'.$blog->id) }}" class="btn btn-info warningdesign">Detail</a></i></li>
                                        </ul>
                                    </div>
                                    @endforeach
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</section>
    <!-- Blog Section End -->
@endsection