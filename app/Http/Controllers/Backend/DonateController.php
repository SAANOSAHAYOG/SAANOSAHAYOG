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
      $datadonate = Donate::all();
    	return view('admin.donate.home', compact('datadonate'));
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

   		//save our image
         if(Input::hasFile('image')){
        $file=Input::file('image');
        $destinationPath = 'uploads';
        $file->move($destinationPath,$file->getClientOriginalName());
        $donate->image=$file->getClientOriginalName();
      }

   		$donate->save();
      	session()->flash('success','Thank you for your Donation!!');
   		return redirect()->back();
   }
}
