<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public $timestamps = false;

    public function books()
    {
    return $this->belongsToMany('App\Book', 'book_author');
    }

    public function tags()
    {
    return $this->belongsToMany('App\Tag');
    }

}
