<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author_Info extends Model
{
    protected $table = 'Author_Infos';
    public $timestamps = false;


    public function author()
    {
    return $this->belongsTo('App\Author');
    }

}
