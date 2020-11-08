<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public $timestamps = false;

    public function books()
    {
    return $this->belongsToMany('App\Book');
    }

}
