@extends('admin.main')

@section('content')

<section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary form">
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
        	<div class="box-header with-border">
              <h3 class="box-title">Event Form</h3>
            </div>
            <form action="{{ route('storeevent') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
              <div class="box-body">

                <div class="form-group{{ $errors->has('location')? 'has-error' : '' }}">
                  <label for="location">Location</label>
                  <input type="text" name="location" class="form-control" placeholder="" value="{{ old('location') }}">
                  @if ($errors->has('location'))
                  <span class="help-block">
                    <strong>{{ $errors->first('location') }}</strong>
                  </span>
                  @endif
                </div>

                 <div class="form-group{{ $errors->has('startdate')? 'has-error' : '' }}">
                  <label for="startdate">Start Date</label>
                  <input type="date" name="startdate" class="form-control" placeholder="" value="{{ old('startdate') }}">
                  @if ($errors->has('startdate'))
                  <span class="help-block">
                    <strong>{{ $errors->first('startdate') }}</strong>
                  </span>
                  @endif
                </div>

                 <div class="form-group{{ $errors->has('starttime')? 'has-error' : '' }}">
                  <label for="starttime">Start Time</label>
                  <input type="time" name="starttime" class="form-control" placeholder="" value="{{ old('starttime') }}">
                  @if ($errors->has('starttime'))
                  <span class="help-block">
                    <strong>{{ $errors->first('starttime') }}</strong>
                  </span>
                  @endif
                </div>

                 <div class="form-group{{ $errors->has('enddate')? 'has-error' : '' }}">
                  <label for="enddate">End Date</label>
                  <input type="date" name="enddate" class="form-control" placeholder="" value="{{ old('enddate') }}">
                  @if ($errors->has('enddate'))
                  <span class="help-block">
                    <strong>{{ $errors->first('enddate') }}</strong>
                  </span>
                  @endif
                </div>

                 <div class="form-group{{ $errors->has('endtime')? 'has-error' : '' }}">
                  <label for="endtime">End Time</label>
                  <input type="time" name="endtime" class="form-control" placeholder="" value="{{ old('endtime') }}">
                  @if ($errors->has('endtime'))
                  <span class="help-block">
                    <strong>{{ $errors->first('endtime') }}</strong>
                  </span>
                  @endif
                </div>

                <div class="form-group{{ $errors->has('eventname')? 'has-error' : '' }}">
                  <label for="eventname">Event Name</label>
                  <input type="text" name="eventname" class="form-control" placeholder="" value="{{ old('eventname') }}">
                  @if ($errors->has('eventname'))
                  <span class="help-block">
                    <strong>{{ $errors->first('eventname') }}</strong>
                  </span>
                  @endif
                </div>

                <div class="form-group{{ $errors->has('description')? 'has-error' : '' }}">
                  <label>Description</label>
                    <textarea name="description" id="editor1" rows="10" cols="80" >
                    </textarea>
                    @if ($errors->has('description'))
                  <span class="help-block">
                    <strong>{{ $errors->first('description') }}</strong>
                  </span>
                  @endif
                </div>

                <div class="form-group{{ $errors->has('image')? 'has-error' : '' }}">
                  <label for="image">Image</label>
                  <input type="file" id="exampleInputFile" name="image" value={{ old('image') }}>
                  @if ($errors->has('image'))
                  <span class="help-block">
                    <strong>{{ $errors->first('image') }}</strong>
                  </span>
                  @endif
                </div>

                <div class="dropdown">
                  <label>Status</label>
                <select class="form-group" name="status">
                  <option value=1>Publish</option>
                  <option value=0>Unpublish</option>
                </select> 
              </div>
            <button class="btn btn-primary buttondesign" type="submit" name="button">Submit</button>

     </div>
 </form>
</div>
</div>
</div>
</section>

@endsection


