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
              <form action="{{ route('updateblog' , $blog->id) }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" name="title" class="form-control" placeholder="" value="{{ $blog->title }}">
                </div>

                <div class="form-group">
                  <label for="date">Date</label>
                  <input type="date" name="date" class="form-control" placeholder="" value="{{ $blog->date }}">
                </div>

                <div class="form-group">
                    <textarea name="description" id="editor1" rows="10" cols="80"> {!! $blog->description !!}
                    </textarea>
                </div>

                <div class="form-group">
                  <label for="image">Image</label>
                  <input type="file" name="image">{{ $blog->image }}
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