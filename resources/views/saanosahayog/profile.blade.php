	@extends('saanosahayog.home')
	@section('content')
	<section id="call-to-action" class="wow fadeIn">
		<div class="container text-center">
			<div class="breadcrumb-text">
				<h2>Profile</h2>
				<div class="bt-option">
					<a href="{{ url('/home') }}">Home</a>
					<span>Profile</span>
				</div>
			</div>
		</div>
	</section>
	<br>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card ">
					<div class="card-header site-btn">{{ __('User Detail') }}</div>
					<div class="card-body">
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
						<div class="row">
							<a href=""><button class="col-md-4 offset-md-4 site-btn">Update Profile</button></a>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
	@endsection