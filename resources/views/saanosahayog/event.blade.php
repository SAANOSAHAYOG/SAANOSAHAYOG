@extends('saanosahayog.main')
@section('content')

	<section id="call-to-action" class="wow fadeIn">
		<div class="container text-center">
			<h1>Event</h1>
			<p>It's not what you achieve, it's what you overcome.</p>
		</div>
	</section>

<section class="event">
		 <div class="container">

		 <header class="section-header wow fadeInUp">
          <h1 class="care-header">Current Event</h1>
          <p></p>
        </header>

		 <div class="table-responsive">
		  <table class="table table-hover">
		    <tbody>
		    	@foreach ($getevent as $event)
		      <tr class="tableevent">
		        <td class="dataevent">{{ $event->eventname }}</td>
		        <td class="dataevent">{{ $event->location }}</td>
		        <td class="dataevent">{{ $event->startdate }}</td>
		        <th><a href="{{ url('event-detail/'.$event->id) }}"  class="btn btn-warning warningdesign">Join</a></th>
		      </tr>
		      @endforeach
		    </tbody>
		    <style>
		    	.dataevent{
		    		color:#2b3b4a;
		    		font-size:15px;
		    	}
		    	.warningdesign {
    color: #212529;
    background-color: #ea2814;
    border-color: #151108;
    color: white;
		    	}
		    </style>
		  </table>
		</div>
	</div>
</section>
@endsection