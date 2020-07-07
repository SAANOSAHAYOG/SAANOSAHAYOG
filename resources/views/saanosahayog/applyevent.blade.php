@extends('saanosahayog.main')
@section('content')
	<section id="call-to-action" class="wow fadeIn">
		<div class="container text-center">
			<div class="breadcrumb-text">
				<h2>Our Upcoming Events</h2>
				<div class="bt-option">
					<a href="#">Home</a>
					<span>Events</span>
				</div>
			</div>
		</div>
	</section>
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
									<div class="col=lg-12">
									<div class="appevent">
										<h4 class="event-header">Details</h4>
										{!! $event->description !!}
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
	<section class="section two-colums">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="text-apply">
							<h1 class="event-header">Register for Event</h1>
							<p>Please send us your Detail.</p>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="event-body">
							<form action="{{ route('storeapplyevent') }}" method="POST" enctype="multipart/form-data">
								{{ csrf_field() }}
								<div class="form-row">
									<div class="form-group">
										<label>Event Name</label>
										<input type="text" name="eventname" class="form-control" />
									</div>
									<div class="form-group">
										<label>Full Name</label>
										<input type="text" name="name" class="form-control" />
									</div>
									<div class="form-group">
										<label>Email</label>
										<input type="email" name="email" class="form-control"/>
									</div>
									<div class="form-group">
										<label>Phone Number</label>
										<input type="phone" name="phone" class="form-control" />
									</div>
									<button type="submit" class="site-btn">Submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
@endsection