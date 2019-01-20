@extends('layouts.app')

@section('content')
    <div class="content-heading">
        <div>Tag
            <small>Cadastro</small>
        </div>
    </div>

    <div class="card card-default">
        <form method="POST" role="form" class="form-horizontal" action="{{ route('tags.update', ['tag' => $tag->id]) }}">
            @method('PUT')
            @include('tags._form', ['action' => 'Editar'])
        </form>
    </div>
@endsection
