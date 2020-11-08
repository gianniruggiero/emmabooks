<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function authors()
    {
    return $this->belongsToMany('App\Author', 'book_author');
    }

    public function tags()
    {
    return $this->belongsToMany('App\Tag');
    }
}
