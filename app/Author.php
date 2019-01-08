<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [
        'name',
        'known_as',
        'gender',
        'bithday',
        'death',
        'country',
        'state',
        'city',
        'biography',
        'site',
        'facebook',
        'twitter',
        'wikipedia',
    ];

    public function books() {
        return $this->belongsToMany('App\Book');
    }

    public function genders() {
        return $this->belongsToMany('App\Gender');
    }
}
