@extends('admin.main')

@section('content')

<div class="box">
  <div class="box-header">
    <h3 class="box-title">View Event Detail</h3>
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
          <th>Location</th>
          <th>Start Date</th>
          <th>Start Time</th>
          <th>End Date</th>
          <th>End Time</th>
          <th>Event Name</th>
          <th>Description</th>
          <th>Image</th>
          <th>Status</th>
          <th>Button</th>
        </tr>
      </thead>
      <tbody>
      @foreach($dataevent as $k=>$fn)
      <tr>
        <td>{{ $fn->id }}</td>
        <td>{{ $fn->location }} </td>
        <td>{{ $fn->startdate }}</td>
        <td>{{ $fn->starttime }}</td>
        <td>{{ $fn->enddate }} </td>
        <td>{{ $fn->endtime }}</td>
        <td>{{ $fn->eventname }}</td>
        <td>{!! $fn->description !!}</td>
        <td><img src="{{ url('/uploads/'.$fn->image) }}" style="height:50px;width:100px;"></td>
        @if($fn->status == "1")
        <td><img src="{{ url('public/saanosahayog/img/active.png')}}" ></td>
        @else
        <td><img src="{{ url('public/saanosahayog/img/wrong.jpg')}}" ></td>
        @endif
        <td>
          <a href="{{ url('/editevent',$fn->id) }}" class="btn btn-sm btn-info">Edit</a>

          <a href="{{ url('/deleteevent',$fn->id) }}" onclick="return confirm ('Are you sure you want to delete?');" class="btn btn-sm btn-danger">Delete</a></td>
      </tr>
      @endforeach
    </tbody>
    <tfoot>
    <tr>
      <th>ID</th>
      <th>Location</th>
      <th>Start Date</th>
      <th>Start Time</th>
      <th>End Date</th>
      <th>End Time</th>
      <th>Event Name</th>
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