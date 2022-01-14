<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Model\Volunteer;
use App\Notifications\RepliedToThread;

class VolunteerController extends Controller
{
    public function viewvolunteer()
    {
      $datavolunteer = Volunteer::all();
    	return view('admin.volunteer.home', compact('datavolunteer'));
    }
    public function storevolunteer( Request $request)
    {
    	$volunteer = new Volunteer;
   		$this->validate($request,[
   			'name' => 'required',
   			'email' => 'required',
   			'phone' => 'required',
   			'address' => 'required',
   			'city' => 'required',
   			'state' => 'required',
   			'zipcode' => 'required',
   			'learn' => 'required',

   		]);
   		$volunteer->name = $request->name;
   		$volunteer->email = $request->email;
   		$volunteer->phone = $request->phone;
   		$volunteer->address =  $request->address;
   		$volunteer->city = $request->city;
   		$volunteer->state = $request->state;
   		$volunteer->zipcode = $request->zipcode;
   		$volunteer->learn =  $request->learn;

   		$volunteer->save();
      auth()->user()->notify(new RepliedToThread());
      	session()->flash('success','Thank you for Register Volunteer!!.');
   		return redirect()->back();
    }
}
