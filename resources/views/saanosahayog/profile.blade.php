@extends('saanosahayog.home')
@section('content')
<section id="call-to-action" class="wow fadeIn">
	<div class="container text-center">
		<div class="breadcrumb-text">
			<h2>Profile</h2>
		</div>
	</div>
</section>
<br>
<div class="container">
	<div class="col-md-9">
		<div class="card ">
			<div class="card-header site-btn">{{ __('User Detail') }}</div>
			<br>
			<div class="card-body">
				<div class="row">
					<div class="col-md-12 text-center">
						<img src="{{ url('/uploads/'.Auth::user()->image) }}" style="height:200px;width:300px;object-fit: contain;">
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-6 text-center">Name</div>
					<div class="col-md-6">
						{{ Auth::user()->name }}
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-6 text-center">Address</div>
					<div class="col-md-6">
						{{ Auth::user()->address }}
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-6 text-center">Phone Number</div>
					<div class="col-md-6">
						{{ Auth::user()->phone }}
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-6 text-center">Email Address</div>
					<div class="col-md-6">
						{{ Auth::user()->email }}
					</div>
				</div>
				<hr>
				<div class="row text-center">
					<a href="{{ url('/updateprofile') }}"><button class="col-md-3 offset-md-3 site-btn">Update Profile</button></a>
				</div>
				
			</div>
		</div>
	</div>
</div>
<br>
@endsection