@extends('layouts.app')

@section('content')
    <div class="content-heading">
        <div>Gênero
            <small>Cadastro</small>
        </div>
    </div>

    <div class="card card-default">
        <form method="POST" role="form" class="form-horizontal" action="{{ route('genders.update', ['gender' => $gender->id]) }}">
            @method('PUT')
            @include('genders._form', ['action' => 'Editar'])
        </form>
    </div>
@endsection
