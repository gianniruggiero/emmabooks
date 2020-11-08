<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    public $timestamps = false;

    public function book()
    {
    return $this->belongsTo('App\Book');
    }
}
