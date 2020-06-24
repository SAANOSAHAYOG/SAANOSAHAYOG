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
              <h3 class="box-title">BLog Form</h3>
            </div>
            <form action="{{ route('storeblog') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
              <div class="box-body">

                <div class="form-group{{ $errors->has('title')? 'has-error' : '' }}">
                  <label for="title">Title</label>
                  <input type="text" name="title" class="form-control" placeholder="" value="{{ old('title') }}">
                  @if ($errors->has('title'))
                  <span class="help-block">
                    <strong>{{ $errors->first('title') }}</strong>
                  </span>
                  @endif
                </div>

                 <div class="form-group{{ $errors->has('date')? 'has-error' : '' }}">
                  <label for="date">Date</label>
                  <input type="date" name="date" class="form-control" placeholder="" value="{{ old('startdate') }}">
                  @if ($errors->has('date'))
                  <span class="help-block">
                    <strong>{{ $errors->first('date') }}</strong>
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


