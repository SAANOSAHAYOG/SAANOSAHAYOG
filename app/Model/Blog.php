<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Blog extends Model implements Searchable
{
    protected $table = 'blogs';
    protected $fillable = ['title'];

    public function getSearchResult(): SearchResult
    {
        $url = route('blog', $this->id);

        return new SearchResult(
            $this,
            $this->title,
            $url
         );
    }
}
