@extends('saanosahayog.home')
@section('content')
<section id="call-to-action" class="wow fadeIn">
	<div class="container text-center">
		<div class="breadcrumb-text">
			<h2>Update Profile</h2>
		</div>
	</div>
</section>
<br>
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
<form method="POST" action="{{ route('updateprofile', Auth::user()->id) }}" enctype="multipart/form-data">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="hidden" name="_method" value="PUT">
	<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
		<label for="name">Name</label>
		<input type="text" name="name" value="{{ Auth::user()->name }}" class="form-control">
		@if ($errors->has('name'))
		<span class="help-block">
			<strong>{{ $errors->first('name') }}</strong>
		</span>
		@endif
	</div>
	<div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
		<label for="address">Address</label>
		<input type="text" name="address" value="{{ Auth::user()->address }}" class="form-control">
		@if ($errors->has('address'))
		<span class="help-block">
			<strong>{{ $errors->first('address') }}</strong>
		</span>
		@endif
	</div>
	<div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
		<label for="phone">Phone Number</label>
		<input type="text" name="phone" value="{{ Auth::user()->phone }}" class="form-control">
		@if ($errors->has('phone'))
		<span class="help-block">
			<strong>{{ $errors->first('phone') }}</strong>
		</span>
		@endif
	</div>
	<div class="form-group">
		<label for="image">Image</label>
		<input type="file" name="image" onchange="PreviewImage(event)">
		<img src="{{ url('/uploads/'.Auth::user()->image) }}" id="PreviewImageID" class="hello">
	</div>
	<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
		<label for="email">Email</label>
		<input type="email" name="email" value="{{ Auth::user()->email }}" class="form-control">
		@if ($errors->has('email'))
		<span class="help-block">
			<strong>{{ $errors->first('email') }}</strong>
		</span>
		@endif
	</div>
	<button type="submit" class="site-btn">
	<i class="fa fa-btn fa-sign-in"></i> Update
	</button>
</form>
<br>
@endsection