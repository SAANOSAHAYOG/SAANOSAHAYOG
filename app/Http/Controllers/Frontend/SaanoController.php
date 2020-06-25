<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SaanoController extends Controller
{
    public function Index()
    {
        return view('saanosahayog.index');
    }

    public function Event()
    {
        return view('saanosahayog.event');
    }

    public function About()
    {
        return view('saanosahayog.about-us');
    }

    public function Contact()
    {
        return view('saanosahayog.contact-us');
    }
}
