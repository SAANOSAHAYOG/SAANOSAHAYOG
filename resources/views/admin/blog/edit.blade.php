@extends('admin.main')
@section('content')
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-info">
        <div class="box-header">
          <h3 class="box-title">Update Blog Form</h3>
        </div>
        <div class="box-body pad">
          <form action="{{ route('updateblog' , $blog->id) }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
             @method('PUT')
            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
              <label for="title">Location</label>
              <input type="text" name="title" class="form-control" id="title" value="{{ $blog->title }}">
              @if ($errors->has('title'))
              <span class="help-block">
                <strong>{{ $errors->first('title') }}</strong>
              </span>
              @endif
            </div>
            <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
              <label for="date">Date</label>
              <input type="date" name="date" class="form-control" id="date" value="{{ $blog->date }}">
              @if ($errors->has('date'))
              <span class="help-block">
                <strong>{{ $errors->first('date') }}</strong>
              </span>
              @endif
            </div>
            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
              <label for="description">Description</label>
              <textarea name="description" id="editor1" rows="10" cols="80"> {!! $blog->description !!}
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
              <img src="{{ url('/uploads/'.$blog->image) }}" id="PreviewImageID" class="hello">
            </div>
            <div class="dropdown">
              <label>Status</label>
              <select class="form-group" name="status" value="{{ $blog->status }}">
                <option value=1>Publish</option>
                <option value=0>Unpublish</option>
              </select>
            </div>
            <button class="btn btn-primary buttondesign" type="submit" name="button">Update Blog</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection