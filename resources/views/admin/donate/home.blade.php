@extends('admin.main')

@section('content')

<div class="box">
  <div class="box-header">
    <h3 class="box-title">View Detail of Contact</h3>
  </div>
  <!-- /.box-header -->
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
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Address</th>
          <th>City</th>
          <th>State</th>
          <th>Zipcode</th>
          <th>Donate Detail</th>
          <th>image</th>

        </tr>
      </thead>
      <tbody>
      @foreach($datadonate as $k=>$fn)
      <tr>
        <td>{{ $fn->id }}</td>
        <td>{{ $fn->name }}</td>
        <td>{{ $fn->email }} </td>
        <td>{{ $fn->phone }}</td>
        <td>{{ $fn->address }} </td>
        <td>{{ $fn->city }}</td>
        <td>{{ $fn->state }}</td>
        <td>{{ $fn->zipcode }} </td>
        <td>{{ $fn->donate }}</td>
        <td><img src="{{ url('/uploads/'.$fn->image) }}" style="height:50px;width:100px;"></td>

      </tr>
      @endforeach
    </tbody>
    <tfoot>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Address</th>
      <th>City</th>
      <th>State</th>
      <th>Zipcode</th>
      <th>Donate Detail</th>
      <th>image</th>
    </tr>
    </tfoot>
  </table>
</div>
</div>

@endsection