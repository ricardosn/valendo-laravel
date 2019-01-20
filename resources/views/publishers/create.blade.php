@extends('layouts.app')

@section('content')
    <div class="content-heading">
        <div>Editora
            <small>Cadastro</small>
        </div>
    </div>

    <div class="card card-default">
        <form method="POST" role="form" class="form-horizontal" action="/publishers">
            @include('publishers._form', ['action' => 'Nova'])
        </form>
    </div>
@endsection
