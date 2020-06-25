<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Model\Event;

class EventController extends Controller
{
    public function viewevent()
    {
      $dataevent = Event::all();
      return view('admin.event.home',compact('dataevent'));
    }
    public function createevent()
    {
    	return view('admin.event.create');
    }
    public function storeevent( Request $request)
    {
    	$event = new Event;
   		$this->validate($request,[
   			'location' => 'required',
   			'startdate' => 'required',
   			'starttime' => 'required',
   			'eventname' => 'required',
   			'description' => 'required',
   			'image' => 'required',
   		]);
   		$event->location = $request->location;
   		$event->startdate = $request->startdate;
   		$event->starttime =  $request->starttime;
   		$event->enddate = $request->enddate;
   		$event->endtime = $request->endtime;
   		$event->eventname = $request->eventname;
   		$event->description =  $request->description;
   		$event->image = $request->image;
      $event->status = $request->status;

      //save our image
         if(Input::hasFile('image')){
        $file=Input::file('image');
        $destinationPath = 'uploads';
        $file->move($destinationPath,$file->getClientOriginalName());
        $event->image=$file->getClientOriginalName();
      }

      
   		// dd($event);
   		$event->save();
   		   session()->flash('success','Inserted Successfully!!');
			return redirect()->route('viewevent');
	}
	public function editevent($id)
	{
		$event = Event::find($id);
		return view('admin.event.edit',compact('event'));
	}
	public function updateevent(Request $request, $id)
	{
		$event = Event::find($id);

		  $event->location = $request->location;
   		$event->startdate = $request->startdate;
   		$event->starttime =  $request->starttime;
   		$event->enddate = $request->enddate;
   		$event->endtime = $request->endtime;
   		$event->eventname = $request->eventname;
   		$event->description =  $request->description;
   		$event->image = $request->image;
      $event->status = $request->status;

      //save our image
         if(Input::hasFile('image')){
        $file=Input::file('image');
        $destinationPath = 'uploads';
        $file->move($destinationPath,$file->getClientOriginalName());
        $event->image=$file->getClientOriginalName();
      }

		$event->save();

		session()->flash('success','Updated Successfully!!');
			return redirect()->route('viewevent');
	}
	public function deleteevent($id)
	{
		Event::destroy($id);
		session()->flash('success','Deleted Successfully!!');
			return redirect()->route('viewevent');
	}
}
