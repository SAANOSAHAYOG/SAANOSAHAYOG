@extends('admin.main')
@section('content')
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-info">
        <div class="box-header">
          <h3 class="box-title">Update Event Form</h3>
        </div>
        <div class="box-body pad">
          <form action="{{ route('updateevent' , $event->id) }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
             @method('PUT') 
            <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
              <label for="location">Location</label>
              <input type="text" name="location" class="form-control" id="location" value="{{ $event->location }}">
              @if ($errors->has('location'))
              <span class="help-block">
                <strong>{{ $errors->first('location') }}</strong>
              </span>
              @endif
            </div>
            <div class="col-lg-12">
              <div class="col-lg-6">
            <div class="form-group{{ $errors->has('startdate') ? ' has-error' : '' }}">
              <label for="startdate">Start Date</label>
              <input type="date" name="startdate" class="form-control" id="startdate" value="{{ $event->startdate }}">
              @if ($errors->has('startdate'))
              <span class="help-block">
                <strong>{{ $errors->first('startdate') }}</strong>
              </span>
              @endif
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group{{ $errors->has('starttime') ? ' has-error' : '' }}">
              <label for="starttime">Start Time</label>
              <input type="time" name="starttime" class="form-control" id="starttime" value="{{ $event->starttime }}">
              @if ($errors->has('starttime'))
              <span class="help-block">
                <strong>{{ $errors->first('starttime') }}</strong>
              </span>
              @endif
            </div>
          </div>
          </div>
          <div class="col-lg-12">
              <div class="col-lg-6">
            <div class="form-group{{ $errors->has('enddate') ? ' has-error' : '' }}">
              <label for="enddate">End Date</label>
              <input type="date" name="enddate" class="form-control" id="enddate" value="{{ $event->enddate }}">
              @if ($errors->has('enddate'))
              <span class="help-block">
                <strong>{{ $errors->first('enddate') }}</strong>
              </span>
              @endif
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group{{ $errors->has('endtime') ? ' has-error' : '' }}">
              <label for="endtime">End Time</label>
              <input type="time" name="endtime" class="form-control" id="endtime" value="{{ $event->endtime }}">
              @if ($errors->has('endtime'))
              <span class="help-block">
                <strong>{{ $errors->first('endtime') }}</strong>
              </span>
              @endif
            </div>
          </div>
        </div>
            <div class="form-group{{ $errors->has('eventname') ? ' has-error' : '' }}">
              <label for="eventname">Event Name</label>
              <input type="text" name="eventname" class="form-control" id="eventname" value="{{ $event->eventname }}">
              @if ($errors->has('eventname'))
              <span class="help-block">
                <strong>{{ $errors->first('eventname') }}</strong>
              </span>
              @endif
            </div>
            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
              <label for="description">Description</label>
              <textarea name="description" id="editor1" rows="10" cols="80"> {!! $event->description !!}
                    </textarea>
                     @if ($errors->has('description'))
              <span class="help-block">
                <strong>{{ $errors->first('description') }}</strong>
              </span>
              @endif
            </div>
            <div class="form-group">
                  <label for="image">Image</label>
                  <input type="file" name="image" onchange="PreviewImage(event)">
                    <img src="{{ url('/uploads/'.$event->image) }}" id="PreviewImageID" class="hello">
                </div>
            <div class="dropdown">
              <label>Status</label>
              <select class="form-group" name="status" value="{{ $event->status }}">
                <option value=1>Publish</option>
                <option value=0>Unpublish</option>
              </select>
            </div>
            <button class="btn btn-primary buttondesign" type="submit" name="button">Update Event</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection