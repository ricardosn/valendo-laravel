@extends('layouts.app')

@section('content')
    <div class="content-heading">
        <div>Livro
            <small>Cadastro</small>
        </div>
    </div>

    <div class="card card-default">
        <form method="POST" role="form" class="form-horizontal" action="/books">
            @include('books._form', ['action' => 'Novo'])
        </form>
    </div>
@endsection
