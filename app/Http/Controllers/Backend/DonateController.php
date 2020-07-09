<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Model\Donate;

class DonateController extends Controller
{
    public function viewdonate()
    {
    	return view('admin.donate.home');
    }
    public function storedonate( Request $request)
    {
    	$donate = new Donate;
   		$this->validate($request,[
   			'name' => 'required',
   			'email' => 'required',
   			'phone' => 'required',
   			'address' => 'required',
   			'city' => 'required',
   			'state' => 'required',
   			'zipcode' => 'required',
   			'donate' => 'required',
   			'image' => 'required',

   		]);
   		$donate->name = $request->name;
   		$donate->email = $request->email;
   		$donate->phone = $request->phone;
   		$donate->address =  $request->address;
   		$donate->city = $request->city;
   		$donate->state = $request->state;
   		$donate->zipcode = $request->zipcode;
   		$donate->donate =  $request->donate;
   		$donate->image =  $request->image;

   		 dd($donate);
   		$donate->save();
      	session()->flash('success','Thank you for Donating Us!!');
   		return redirect()->back();
   }
}
