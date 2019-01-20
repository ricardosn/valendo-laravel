<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Publisher;

class PublisherService
{
    public function store(Request $request)
    {
        return Publisher::create($request->all());
    }

    public function update(Request $request, Publisher $publisher)
    {
        return $publisher->fill($request->all())->save();
    }
}
