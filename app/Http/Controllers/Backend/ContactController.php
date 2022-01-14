<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Model\Contact;

class ContactController extends Controller
{
    public function viewcontact()
    {
      $datacontact = Contact::all();
      return view('admin.contact.home',compact('datacontact'));
    }
    public function storecontact( Request $request)
    {
    	$contact = new Contact;
   		$this->validate($request,[
   			'name' => 'required',
   			'email' => 'required',
   			'phone' => 'required',
   			'message' => 'required',
   		]);
   		$contact->name = $request->name;
   		$contact->email = $request->email;
   		$contact->phone = $request->phone;
   		$contact->message =  $request->message;

   		 //dd($contact);
   		$contact->save();
      
      	session()->flash('success','Thank you for Contacting Us!!');
   		return redirect()->back();
   }
}
