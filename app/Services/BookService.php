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

        if (!$publisher) {
            // TODO throw exception
        }

        $book = $publisher->books()->create($request->all());
        // TODO save author
        $book->genders()->attach($request->genders);
        $book->tags()->attach($request->tags);

    }
}
