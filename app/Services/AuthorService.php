<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Author;


class AuthorService
{
    public function store(Request $request)
    {
        $author = Author::create($request->all());
        $author->genders()->attach($request->genders);

        return $author;
    }

    public function update(Request $request, Author $author)
    {
        $author->fill($request->all())->save();
        $author->genders()->sync($request->genders);

        return $author;
    }
}
