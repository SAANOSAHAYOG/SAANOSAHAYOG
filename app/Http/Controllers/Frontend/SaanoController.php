<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Event;
use App\Model\Blog;

class SaanoController extends Controller
{
    public function Index()
    {
        $getevent = Event::where('status','=', 1)
                      ->orderBy('id','desc')->take(4)->get();
        return view('saanosahayog.index' , compact('getevent'));
    }

    public function About()
    {
        return view('saanosahayog.about-us');
    }

    public function Donate()
    {
        return view('saanosahayog.donate');
    }

    public function Event()
    {
        $getevent = Event::where('status','=', 1)
                   ->orderBy('id','desc')->get();
        return view ('saanosahayog.event' , compact('getevent'));
    }

    public function eventDetail($id)
    {
        $getevent = Event::where('id',$id)
                   ->where('status','=', 1)
                   ->orderBy('id','desc')->get();
        return view ('saanosahayog.applyevent' , compact('getevent'));
    }

    public function Profile()
    {
        return view('saanosahayog.profile');
    }

    public function Blog()
    {
        $getblog = Blog::where('status','=', 1)
                   ->orderBy('id','desc')->get();
        return view('saanosahayog.blog' , compact('getblog'));
    }

    public function blogDetail($id)
    {
        $getblog = Blog::where('id',$id)
                   ->where('status','=', 1)
                   ->orderBy('id','desc')->get();
        return view ('saanosahayog.blog-detail' , compact('getblog'));
    }

    public function Volunteer()
    {
        return view('saanosahayog.volunteer');
    }

    public function Volunteerform()
    {
        return view('saanosahayog.volunteer-form');
    }

    public function Contact()
    {
        return view('saanosahayog.contact-us');
    }

    public function Stripe()
    {
        return view('saanosahayog.stripe');
    }
}
