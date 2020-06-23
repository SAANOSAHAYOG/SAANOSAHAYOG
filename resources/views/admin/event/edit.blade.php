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
              <form action="{{ route('updateevent' , $event->id) }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                  <label for="location">Location</label>
                  <input type="text" name="location" class="form-control" placeholder="" value="{{ $event->location }}">
                </div>

                <div class="form-group">
                  <label for="startdate">Start Date</label>
                  <input type="date" name="startdate" class="form-control" placeholder="" value="{{ $event->startdate }}">
                </div>

                <div class="form-group">
                  <label for="starttime">Start Time</label>
                  <input type="time" name="starttime" class="form-control" placeholder="" value="{{ $event->starttime }}">
                </div>

                <div class="form-group">
                  <label for="enddate">End Date</label>
                  <input type="date" name="enddate" class="form-control" placeholder="" value="{{ $event->enddate }}">
                </div>

                <div class="form-group">
                  <label for="endtime">End Time</label>
                  <input type="time" name="endtime" class="form-control" placeholder="" value="{{ $event->endtime }}">
                </div>

                <div class="form-group">
                  <label for="eventname">Event Name</label>
                  <input type="text" name="eventname" class="form-control" placeholder="" value="{{ $event->eventname }}">
                </div>

                <div class="form-group">
                    <textarea name="description" id="editor1" rows="10" cols="80"> {!! $event->description !!}
                    </textarea>
                </div>

                <div class="form-group">
                  <label for="image">Image</label>
                  <input type="file" name="image">{{ $event->image }}
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