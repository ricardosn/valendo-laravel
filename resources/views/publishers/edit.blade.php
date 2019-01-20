@extends('layouts.app')

@section('content')
    <div class="content-heading">
        <div>Editora
            <small>Cadastro</small>
        </div>
    </div>

    <div class="card card-default">
        <form method="POST" role="form" class="form-horizontal" action="{{ route('publishers.update', ['publisher' => $publisher->id]) }}">
            @method('PUT')
            @include('publishers._form', ['action' => 'Editar'])
        </form>
    </div>
@endsection
