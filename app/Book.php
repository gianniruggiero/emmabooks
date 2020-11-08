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

    public function loan()
    {
    return $this->hasOne('App\Loan');
    }

    public function genre()
    {
    return $this->belongsTo('App\Genre');
    }


}
