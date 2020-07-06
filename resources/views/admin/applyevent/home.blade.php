@extends('admin.main')

@section('content')

<div class="box">
  <div class="box-header">
    <h3 class="box-title">View Join Form Detail of Event</h3>
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
          <th>Event Name</th>
          <th>Full Name</th>
          <th>Email</th>
          <th>Phone</th>
        </tr>
      </thead>
      <tbody>
      @foreach($dataapplyevent as $k=>$fn)
      <tr>
        <td>{{ $fn->id }}</td>
        <td>{{ $fn->eventname }}</td>
        <td>{{ $fn->name }} </td>
        <td>{{ $fn->email }}</td>
        <td>{{ $fn->phone }} </td>

      </tr>
      @endforeach
    </tbody>
    <tfoot>
    <tr>
      <th>ID</th>
      <th>Event Name</th>
      <th>Full Name</th>
      <th>Email</th>
      <th>Phone</th>
    </tr>
    </tfoot>
  </table>
</div>
</div>

@endsection