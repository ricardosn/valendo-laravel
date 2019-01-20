<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Gender;

class GenderService
{
    public function store(Request $request)
    {
        return Gender::create($request->all());
    }

    public function update(Request $request, Gender $gender)
    {
        return $gender->fill($request->all())->save();
    }
}
