@extends('saanosahayog.main')
@section('content')
	<section id="call-to-action" class="wow fadeIn">
		<div class="container text-center">
			<h1>Event</h1>
			<p>It's not what you achieve, it's what you overcome.</p>
		</div>
	</section>
	<section class="career">
		<div class="container">
			<div class="row">
				<h1 class="care-header">Event Detail</h1>
				<div class="career-body">
					@foreach ($getevent as $event)
					<div class="care-title">
						<h4>{{ $event->eventname }}</h4>
					</div>
					<div class="care-content">
						<h6>{{ $event->location}}</h6>
						<h6>{{ $event->startdate}}</h6>
						<h6>{{ $event->enddate}}</h6>
						<h6>{{ $event->starttime}}</h6>
						<h6>{{ $event->endtime}}</h6>
						<div class="description">{!! $event->description !!}
						</div></div>
						@endforeach
					</div>
				</div>
			</div>
		</section>
		<section class="section two-colums">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="text-apply">
							<h1 class="care-header">Register for Event</h1>
							<p>Please send us your Detail.</p>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="career-body">
							<form action="{{ route('storeapplyevent') }}" method="POST" enctype="multipart/form-data">
								{{ csrf_field() }}
								<div class="form-row">
									<div class="form-group">
										<label>Event Name</label>
										<input type="text" name="eventname" class="form-control" />
									</div>
									<div class="form-group col-md-6">
										<label>Full Name</label>
										<input type="text" name="name" class="form-control" />
									</div>
									<div class="form-group col-md-6">
										<label>Email</label>
										<input type="email" name="email" class="form-control"/>
									</div>
									<div class="form-group col-md-6">
										<label>Phone Number</label>
										<input type="phone" name="phone" class="form-control" />
									</div>
									<div class="form-group col-md-6">
										<label>Address</label>
										<input type="text" name="address" class="form-control" />
									</div>
									<button type="submit" class="btn btn-info">Submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
@endsection