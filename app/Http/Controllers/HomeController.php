<?php

namespace App\Http\Controllers;

use App\Model\Blog;
use App\Model\Event;
use Illuminate\Http\Request;
use Spatie\Searchable\Search;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::with('description')->get();
        return view('home', compact('blogs'));

        $blogs = Event::with('description')->get();
        return view('home', compact('events'));
    }

    public function search(Request $request)
    {
        $searchResults = (new Search())
            ->registerModel(Blog::class, 'title')
            ->registerModel(Event::class, 'location')
            ->perform($request->input('query'));

        return view('search', compact('searchResults'));
    }
}
