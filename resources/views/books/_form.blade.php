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
</div>

<div class="card-footer text-muted">
    <a href="{{ url('/books') }}" class="btn btn-lg">Voltar</a>

    <input class="btn btn-lg btn-green float-right" type="submit" value="{{ $action }}">
</div>