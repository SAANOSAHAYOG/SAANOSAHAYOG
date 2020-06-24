<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Model\Blog;

class BlogController extends Controller
{
     public function viewblog()
    {
      $datablog = Blog::all();
      return view('admin.blog.home',compact('datablog'));
    }
    public function createblog()
    {
    	return view('admin.blog.create');
    }
    public function storeblog( Request $request)
    {
    	$blog = new Blog;
   		$this->validate($request,[
   			'title' => 'required',
   			'date' => 'required',
   			'description' => 'required',
   			'image' => 'required',
   		]);
   		$blog->title = $request->title;
   		$blog->date = $request->date;
   		$blog->description =  $request->description;
   		$blog->image = $request->image;

      //save our image
         if(Input::hasFile('image')){
        $file=Input::file('image');
        $destinationPath = 'uploads';
        $file->move($destinationPath,$file->getClientOriginalName());
        $blog->image=$file->getClientOriginalName();
      }

      
   		// dd($blog);
   		$blog->save();
   		   session()->flash('success','Inserted Successfully!!');
			return redirect()->route('viewblog');
	}
	public function editblog($id)
	{
		$blog = Blog::find($id);
		return view('admin.blog.edit',compact('blog'));
	}
	public function updateblog(Request $request, $id)
	{
		$blog = Blog::find($id);

		 $blog->title = $request->title;
   		$blog->date = $request->date;
   		$blog->description =  $request->description;
   		$blog->image = $request->image;

      //save our image
        if(Input::hasFile('image')){
        $file=Input::file('image');
        $destinationPath = 'uploads';
        $file->move($destinationPath,$file->getClientOriginalName());
        $blog->image=$file->getClientOriginalName();
      }

		$blog->save();

		session()->flash('success','Updated Successfully!!');
			return redirect()->route('viewblog');
	}
	public function deleteblog($id)
	{
		Blog::destroy($id);
		session()->flash('success','Deleted Successfully!!');
			return redirect()->route('viewblog');
	}
}
