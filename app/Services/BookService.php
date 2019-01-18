<?php

namespace App\Services;

use App\Book;
use Illuminate\Http\Request;
use App\Publisher;

class BookService
{
    public function store(Request $request)
    {
        $publisher = Publisher::find($request->publisher_id);
        $book = $publisher->books()->create($request->all());
        $book->genders()->attach($request->genders);

        // TODO save tags and author
    }
}
