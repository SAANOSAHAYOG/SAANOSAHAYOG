@extends('saanosahayog.main')
@section('content')

	<section id="call-to-action" class="wow fadeIn">
		<div class="container text-center">
			<div class="breadcrumb-text">
				<h2>Our Upcoming Events</h2>
				<div class="bt-option">
					<a href="{{ url('/') }}">Home</a>
					<span>Events</span>
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
									@foreach ($getevent as $event)
									<div class="col-lg-3">
										<div class="sc-pic">
											<img src="{{ url('/uploads/'.$event->image) }}" alt="">
										</div>
									</div>
									<div class="col-lg-5">
										<div class="sc-text">
											<h4>{{ $event->eventname }}</h4>
											<ul>
												<li><i class="fa fa-map-marker"></i> {{ $event->location}}
												</li>
											</ul>
										</div>
									</div>
									<div class="col-lg-4">
										<ul class="sc-widget">
											<li><i class="fa fa-clock-o"></i> {{ $event->startdate}} - {{ $event->enddate}}
												</li>
											<li><i class="fa fa-clock-o"></i>{{ $event->starttime}} - {{ $event->endtime}}</li>
											<li><i class="fa fa-hand-o-up"><a href="{{ url('event-detail/'.$event->id) }}" class="btn btn-info warningdesign">Join</a></i></li>
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
	</section>
@endsection