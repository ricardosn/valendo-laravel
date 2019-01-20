<div class="card-header">
    {{ $action }} Editora
</div>

<div class="card-body">
    @csrf

    <fieldset>
        <div class="form-group row">
            <label class="col-md-2" for="name">Nome</label>
            <div class="col-md-10">
                <input class="form-control" id="name" type="text" name="name" value="{{ old('name', $publisher->name ?? '') }}" />
            </div>
        </div>
    </fieldset>

    <fieldset>
        <div class="form-group row">
            <label class="col-md-2" for="description">Descrição</label>
            <div class="col-md-10">
                <textarea class="form-control note-editor" rows="10" id="description" name="description">{{ old('description', $publisher->description ?? '') }}</textarea>
            </div>
        </div>
    </fieldset>
</div>

<div class="card-footer text-muted">
    <a href="{{ url('/publishers') }}" class="btn btn-lg">Voltar</a>

    <input class="btn btn-lg btn-green float-right" type="submit" value="{{ $action }}">
</div>
