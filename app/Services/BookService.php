<?php

namespace App\Services;

use App\Book;
use Illuminate\Http\Request;
use App\Publisher;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Collection;

class BookService
{
    public function store(Request $request)
    {
        $publisher = Publisher::find($request->publisher_id);

        if (!$publisher) {
            throw new ModelNotFoundException("Publisher not found by id " . $request->publisher_id);
        }

        $book = $publisher->books()->create($request->all());
        // TODO save author
        $book->genders()->attach($request->genders);
        $book->tags()->attach($request->tags);

        if ($request->collection) {
            $collection = Collection::firstOrCreate(['name' => $request->collection]);
            $collection->books()->save($book);
        }

        return $book;

    }

    public function update(Request $request, Book $book)
    {
        $publisher = Publisher::find($request->publisher_id);

        if (!$publisher) {
            throw new ModelNotFoundException("Publisher not found by id " . $request->publisher_id);
        }

        $book->fill($request->all());
        $publisher->books()->save($book);
        // TODO save author
        $book->genders()->sync($request->genders);
        $book->tags()->sync($request->tags);

        return $book;

    }
}
