<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'series',
        'isbn_10',
        'isbn_13',
        'edition',
        'year',
        'page_number',
        'synopsis',
    ];

    public function publisher() {
        return $this->belongsTo('App\Publisher');
    }

    public function authors() {
        return $this->belongsToMany('App\Author');
    }

    public function genders() {
        return $this->belongsToMany('App\Gender');
    }

    public function tags() {
        return $this->belongsToMany('App\Tag');
    }
}
