<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Model\Applyevent;

class ApplyeventController extends Controller
{
    public function viewapplyevent()
    {
      $dataapplyevent = Applyevent::all();
      return view('admin.applyevent.home',compact('dataapplyevent'));
    }
    public function storeapplyevent( Request $request)
    {
    	$applyevent = new Applyevent;
   		$this->validate($request,[
   			'eventname' => 'required',
   			'name' => 'required',
   			'email' => 'required',
   			'phone' => 'required',
   		]);
   		$applyevent->eventname = $request->eventname;
   		$applyevent->name = $request->name;
   		$applyevent->email = $request->email;
   		$applyevent->phone =  $request->phone;

   		 // dd($applyevent);
   		$applyevent->save();
      session()->flash('success','Thank you for Applying Successfully!!');
   		return redirect()->oute('saanosahayog.event');
   }
}
