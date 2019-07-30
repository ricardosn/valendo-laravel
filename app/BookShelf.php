<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookShelf extends Model
{
    protected  $fillable = [
        'is_fav',
        'is_wanted',
        'is_owned',
        'to_exchange',
        'is_goal',
        'is_borrowed',
        'status',
        'score'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function book()
    {
        return $this->belongsTo('App\Book');
    }
}
