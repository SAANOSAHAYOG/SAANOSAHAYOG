<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Event;

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

    public function Blog()
    {
        return view('saanosahayog.blog');
    }

    public function Contact()
    {
        return view('saanosahayog.contact-us');
    }
}
