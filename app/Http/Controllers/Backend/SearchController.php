<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Blog;
use App\Model\Event;
use Spatie\Searchable\Search;

class SearchController extends Controller
{
    public function index()
    {
        $blogs = Blog::with('description')->get();
        return view('saanosahayog.blog', compact('blogs'));

        $blogs = Event::with('description')->get();
        return view('saanosahayog.event', compact('events'));
    }

    public function search(Request $request)
    {
        $searchResults = (new Search())
            ->registerModel(Blog::class, 'title')
            ->registerModel(Event::class, 'eventname')
            ->perform($request->input('query'));

        return view('search', compact('searchResults'));
    }
}
