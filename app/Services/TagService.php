<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Tag;

class TagService
{
    public function store(Request $request)
    {
        return Tag::create($request->all());
    }

    public function update(Request $request, Tag $tag)
    {
        return $tag->fill($request->all())->save();
    }
}
