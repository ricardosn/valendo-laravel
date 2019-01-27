<div class="card-header">
    {{ $action }} Livro
</div>

<div class="card-body">
    @csrf

    <fieldset>
        <div class="form-group row">
            <label class="col-md-2" for="title">Título</label>
            <div class="col-md-10">
                <input class="form-control" id="title" type="text" name="title" value="{{ old('title', $book->title ?? '') }}" />
            </div>
        </div>
    </fieldset>

    <fieldset>
        <div class="form-group row">
            <label class="col-md-2" for="subtitle">Subtitulo</label>
            <div class="col-md-10">
                <input class="form-control" id="subtitle" type="text" name="subtitle" value="{{ old('subtitle', $book->subtitle ?? '') }}" />
            </div>
        </div>
    </fieldset>

    <fieldset>
        <div class="form-group row">
            <label class="col-md-2" for="isbn_13">ISBN 13</label>
            <div class="col-md-10">
                <input class="form-control" id="isbn_13" type="text" name="isbn_13" value="{{ old('isbn_13', $book->isbn_13 ?? '') }}" />
            </div>
        </div>
    </fieldset>

    <fieldset>
        <div class="form-group row">
            <label class="col-md-2" for="isbn_10">ISBN 10</label>
            <div class="col-md-10">
                <input class="form-control" id="isbn_10" type="text" name="isbn_10" value="{{ old('isbn_10', $book->isbn_10 ?? '') }}" />
            </div>
        </div>
    </fieldset>

    <fieldset>
        <div class="form-group row mb-2">
        <label class="col-md-2 col-form-label mb-2">Coleção</label>
            <div class="col-md-10">
                <select class="form-control select2-tag" id="collection" name="collection">
                    <option>Digite ou selecione uma coleção</option>
                    @foreach ($collections as $collection)
                        <option
                            @if ($collection->id == old('collection', isset($book) && $book->collection ? $book->collection->name : ''))
                                selected="selected"
                            @endif
                            value="{{ $collection->name }}">{{ $collection->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </fieldset>

    <fieldset>
        <div class="form-group row">
            <label class="col-md-2" for="edition">Edição</label>
            <div class="col-md-10">
                <input class="form-control" id="edition" type="number" name="edition" value="{{ old('edition', $book->edition ?? '') }}" />
            </div>
        </div>
    </fieldset>

    <fieldset>
        <div class="form-group row">
            <label class="col-md-2" for="year">Ano</label>
            <div class="col-md-10">
                <input class="form-control" id="year" type="number" name="year" value="{{ old('year', $book->year ?? '') }}" />
            </div>
        </div>
    </fieldset>

    <fieldset>
        <div class="form-group row">
            <label class="col-md-2" for="page_number">Número de Páginas</label>
            <div class="col-md-10">
                <input class="form-control" id="page_number" type="number" name="page_number" value="{{ old('page_number', $book->page_number ?? '') }}" />
            </div>
        </div>
    </fieldset>

    <fieldset>
        <div class="form-group row">
            <label class="col-md-2" for="synopsis">Sinopse</label>
            <div class="col-md-10">
                <textarea class="form-control note-editor" rows="10" id="synopsis" name="synopsis">{{ old('synopsis', $book->synopsis ?? '') }}</textarea>
            </div>
        </div>
    </fieldset>

    <fieldset>
        <div class="form-group row mb-2">
        <label class="col-md-2 col-form-label mb-2">Editora</label>
            <div class="col-md-10">
                <select class="form-control select2" id="publisher_id" name="publisher_id">
                    <option>Selecione uma editora</option>
                    @foreach ($publishers as $publisher)
                        <option
                            @if ($publisher->id == old('publisher_id', isset($book) ? $book->publisher->id : ''))
                                selected="selected"
                            @endif
                            value="{{ $publisher->id }}">{{ $publisher->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </fieldset>

    <fieldset>
        <div class="form-group row mb-2">
            <label class="col-md-2 col-form-label mb-2">Gêneros</label>
            <div class="col-md-10">
                <select class="form-control select2" id="genders" name="genders[]" multiple="multiple">
                    @foreach ($genders as $gender)
                        <option
                            @if (isset($book) && $book->genders->contains($gender) ||
                                (old('genders') && in_array($gender->id, old('genders'))))
                                selected="selected"
                            @endif
                            value="{{ $gender->id }}">{{ $gender->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </fieldset>

    <fieldset>
        <div class="form-group row mb-2">
            <label class="col-md-2 col-form-label mb-2">Tags</label>
            <div class="col-md-10">
                <select class="form-control select2" id="tags" name="tags[]" multiple="multiple">
                    @foreach ($tags as $tag)
                        <option
                            @if (isset($book) && $book->tags->contains($tag) ||
                                (old('tags') && in_array($tag->id, old('tags'))))
                                selected="selected"
                            @endif
                            value="{{ $tag->id }}">{{ $tag->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </fieldset>
</div>

<div class="card-footer text-muted">
    <a href="{{ url('/books') }}" class="btn btn-lg">Voltar</a>

    <input class="btn btn-lg btn-green float-right" type="submit" value="{{ $action }}">
</div>
