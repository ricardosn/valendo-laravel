<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    protected $fillable = [
        'name'
    ];

    public function books()
    {
        return $this->belongsToMany('App\Book');
    }

    public function authors()
    {
        return $this->belongsToMany('App\Author');
    }
}
