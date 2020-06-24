@extends('admin.main')

@section('content')

<div class="box">
  <div class="box-header">
    <h3 class="box-title">View Blog Detail</h3>
  </div>
  <div class="box-body">

    
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

    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Title</th>
          <th>Date</th>
          <th>Description</th>
          <th>Image</th>
          <th>Status</th>
          <th>Button</th>
        </tr>
      </thead>
      <tbody>
      @foreach($datablog as $k=>$fn)
      <tr>
        <td>{{ $fn->id }}</td>
        <td>{{ $fn->title }} </td>
        <td>{{ $fn->date }}</td>
        <td>{!! $fn->description !!}</td>
        <td><img src="{{ url('/uploads/'.$fn->image) }}" style="height:50px;width:100px;"></td>
        @if($fn->status == "1")
        <td><img src="{{ url('public/saanosahayog/img/active.png')}}" ></td>
        @else
        <td><img src="{{ url('public/saanosahayog/img/wrong.jpg')}}" ></td>
        @endif
        <td>
          <a href="{{ url('/editblog',$fn->id) }}" class="btn btn-sm btn-info">Edit</a>

          <a href="{{ url('/deleteblog',$fn->id) }}" onclick="return confirm ('Are you sure you want to delete?');" class="btn btn-sm btn-danger">Delete</a></td>
      </tr>
      @endforeach
    </tbody>
    <tfoot>
    <tr>
      <th>ID</th>
      <th>Title</th>
      <th>Date</th>
      <th>Description</th>
      <th>Image</th>
      <th>Status</th>
      <th>Button</th>
    </tr>
    </tfoot>
  </table>
</div>
</div>

@endsection