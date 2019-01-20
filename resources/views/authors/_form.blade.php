<div class="card-header">
    {{ $action }} Autor
</div>

<div class="card-body">
    @csrf

    <fieldset>
        <div class="form-group row">
            <label class="col-md-2" for="name">Nome</label>
            <div class="col-md-10">
                <input class="form-control" id="name" type="text" name="name" value="{{ old('name', $author->name ?? '') }}" />
            </div>
        </div>
    </fieldset>

    <fieldset>
        <div class="form-group row">
            <label class="col-md-2" for="known_as">Conhecido como</label>
            <div class="col-md-10">
                <input class="form-control" id="known_as" type="text" name="known_as" value="{{ old('known_as', $author->known_as ?? '') }}" />
            </div>
        </div>
    </fieldset>

    <fieldset>
        <div class="form-group row">
            <label class="col-md-2 col-form-label">Gênero</label>
            <div class="col-md-10">
                <label class="c-radio">
                    <input type="radio" name="gender" value="masculino"
                        @if ('masculino' == old('gender', $author->gender ?? ''))
                            checked="true"
                        @endif>
                    <span class="fa fa-circle"></span> Masculino</label>
                <label class="c-radio">
                    <input type="radio" name="gender" value="feminino"
                        @if ('feminino' == old('gender', $author->gender ?? ''))
                            checked="true"
                        @endif>
                    <span class="fa fa-circle"></span> Feminino</label>
                <label class="c-radio">
                    <input type="radio" name="gender" value="não binário"
                        @if ('não binário' == old('gender', $author->gender ?? ''))
                            checked="true"
                        @endif>
                    <span class="fa fa-circle"></span> Não binário</label>
                <label class="c-radio">
                    <input type="radio" name="gender" value="queer"
                        @if ('queer' == old('gender', $author->gender ?? ''))
                            checked="true"
                        @endif>
                    <span class="fa fa-circle"></span> Queer</label>
            </div>
        </div>
    </fieldset>

    <fieldset>
        <div class="form-group row">
            <label class="col-md-2" for="birthday">Nascimento</label>
            <div class="col-md-10">
                <input class="form-control" id="birthday" type="text" name="birthday" value="{{ old('birthday', $author->birthday ?? '') }}" data-masked="" data-inputmask="'mask': '99/99/9999'" placeholder="Date" im-insert="true" />
            </div>
        </div>
    </fieldset>

    <fieldset>
        <div class="form-group row">
            <label class="col-md-2" for="death">Falecimento</label>
            <div class="col-md-10">
                <input class="form-control" id="death" type="text" name="death" value="{{ old('death', $author->death ?? '') }}" data-masked="" data-inputmask="'mask': '99/99/9999'" placeholder="Date" im-insert="true" />
            </div>
        </div>
    </fieldset>

    <fieldset>
        <div class="form-group row">
            <label class="col-md-2" for="biography">Biografia</label>
            <div class="col-md-10">
                <textarea class="form-control note-editor" rows="10" id="biography" name="biography">{{ old('biography', $author->biography ?? '') }}</textarea>
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
                            @if (isset($author) && $author->genders->contains($gender) ||
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
        <div class="form-group row">
            <label class="col-md-2" for="site">Site</label>
            <div class="col-md-10">
                <input class="form-control" id="site" type="text" name="site" value="{{ old('site', $author->site ?? '') }}" />
            </div>
        </div>
    </fieldset>

    <fieldset>
        <div class="form-group row">
            <label class="col-md-2" for="facebook">Facebook</label>
            <div class="col-md-10">
                <input class="form-control" id="facebook" type="text" name="facebook" value="{{ old('facebook', $author->facebook ?? '') }}" />
            </div>
        </div>
    </fieldset>

    <fieldset>
        <div class="form-group row">
            <label class="col-md-2" for="twitter">Twitter</label>
            <div class="col-md-10">
                <input class="form-control" id="twitter" type="text" name="twitter" value="{{ old('twitter', $author->twitter ?? '') }}" />
            </div>
        </div>
    </fieldset>

    <fieldset>
        <div class="form-group row">
            <label class="col-md-2" for="wikipedia">Wikipedia</label>
            <div class="col-md-10">
                <input class="form-control" id="wikipedia" type="text" name="wikipedia" value="{{ old('wikipedia', $author->wikipedia ?? '') }}" />
            </div>
        </div>
    </fieldset>
</div>

<div class="card-footer text-muted">
    <a href="{{ url('/books') }}" class="btn btn-lg">Voltar</a>

    <input class="btn btn-lg btn-green float-right" type="submit" value="{{ $action }}">
</div>
