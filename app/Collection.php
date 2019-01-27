<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    protected $fillable = [
        'name',
    ];

    public function books()
    {
        return $this->hasMany('App\Book');
    }
}
