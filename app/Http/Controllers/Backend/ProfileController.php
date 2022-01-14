<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\User;

class ProfileController extends Controller
{
    public function updateprofile(Request $request, $id) 
    {
        $user = User::find($id);
        $this->validate($request,[
        'name' => 'required',
        'address' => 'required',
        'phone' => 'required',
        'email' => 'required',
      ]);
        $user->name = $request->name;
        $user->address = $request->address;
        $user->phone = $request->phone;
        //$user->image = $request->image;
        $user->email = $request->email;

        //save our image
         if(Input::hasFile('image')){
        $file=Input::file('image');
        $destinationPath = 'uploads';
        $file->move($destinationPath,$file->getClientOriginalName());
        $user->image=$file->getClientOriginalName();
      }
        $user->save();
        session()->flash('success','Profile Updated!!');
        return redirect()->route('profile');    }
}
