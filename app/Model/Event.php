<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Event extends Model implements Searchable
{
    protected $table = 'events';
    protected $fillable = ['location'];

    public function getSearchResult(): SearchResult
    {
        $url = route('event', $this->id);

        return new SearchResult(
            $this,
            $this->location,
            $url
         );
    }
}
