<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Author extends Model
{
    protected $fillable = [
        'name',
        'known_as',
        'gender',
        'birthday',
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

    protected $dates = [
        'birthday',
        'death'
    ];

    public function setBirthdayAttribute($value)
    {
        $this->attributes['birthday'] = Carbon::createFromFormat('d/m/Y', $value);;
    }

    public function setDeathAttribute($value)
    {
        $this->attributes['death'] = Carbon::createFromFormat('d/m/Y', $value);;
    }

    public function books() {
        return $this->belongsToMany('App\Book');
    }

    public function genders() {
        return $this->belongsToMany('App\Gender');
    }
}
