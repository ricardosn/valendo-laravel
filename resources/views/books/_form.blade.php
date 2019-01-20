<div class="card-header">
    {{ $action }} Livro
</div>

<div class="card-body">
    @csrf

    <fieldset>
        <div class="form-group row">
            <label class="col-md-2" for="title">Título</label>
            <div class="col-md-10">
                <input class="form-control" id="title" type="text" name="title" />
            </div>
        </div>
    </fieldset>

    <fieldset>
        <div class="form-group row">
            <label class="col-md-2" for="subtitle">Subtitulo</label>
            <div class="col-md-10">
                <input class="form-control" id="subtitle" type="text" name="subtitle" />
            </div>
        </div>
    </fieldset>

    <fieldset>
        <div class="form-group row">
            <label class="col-md-2" for="isbn_13">ISBN 13</label>
            <div class="col-md-10">
                <input class="form-control" id="isbn_13" type="text" name="isbn_13" />
            </div>
        </div>
    </fieldset>

    <fieldset>
        <div class="form-group row">
            <label class="col-md-2" for="isbn_10">ISBN 10</label>
            <div class="col-md-10">
                <input class="form-control" id="isbn_10" type="text" name="isbn_10" />
            </div>
        </div>
    </fieldset>

    <fieldset>
        <div class="form-group row">
            <label class="col-md-2" for="series">Coleção</label>
            <div class="col-md-10">
                <input class="form-control" id="series" type="number" name="series" />
            </div>
        </div>
    </fieldset>

    <fieldset>
        <div class="form-group row">
            <label class="col-md-2" for="edition">Edição</label>
            <div class="col-md-10">
                <input class="form-control" id="edition" type="number" name="edition" />
            </div>
        </div>
    </fieldset>

    <fieldset>
        <div class="form-group row">
            <label class="col-md-2" for="year">Ano</label>
            <div class="col-md-10">
                <input class="form-control" id="year" type="number" name="year" />
            </div>
        </div>
    </fieldset>

    <fieldset>
        <div class="form-group row">
            <label class="col-md-2" for="page_number">Número de Páginas</label>
            <div class="col-md-10">
                <input class="form-control" id="page_number" type="number" name="page_number" />
            </div>
        </div>
    </fieldset>

    <fieldset>
        <div class="form-group row">
            <label class="col-md-2" for="synopsis">Sinopse</label>
            <div class="col-md-10">
                <textarea class="form-control note-editor" rows="10" id="synopsis" name="synopsis"></textarea>
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
                        <option value="{{ $publisher->id }}">{{ $publisher->name }}</option>
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
                        <option value="{{ $gender->id }}">{{ $gender->name }}</option>
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
                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
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
