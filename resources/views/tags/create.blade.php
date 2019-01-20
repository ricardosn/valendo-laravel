@extends('layouts.app')

@section('content')
    <div class="content-heading">
        <div>Tag
            <small>Cadastro</small>
        </div>
    </div>

    <div class="card card-default">
        <form method="POST" role="form" class="form-horizontal" action="/tags">
            @include('tags._form', ['action' => 'Nova'])
        </form>
    </div>
@endsection
