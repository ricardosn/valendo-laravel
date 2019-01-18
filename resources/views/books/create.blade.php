@extends('layouts.app')

@section('css')
    <!-- SELECT2-->
    <link rel="stylesheet" href="{{ asset('vendor/select2/dist/css/select2.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/@ttskch/select2-bootstrap4-theme/dist/select2-bootstrap4.css') }}">
@endsection

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

@section('js')
    <!-- SELECT2-->
    <script src="{{ asset('vendor/select2/dist/js/select2.full.js') }}"></script>
@endsection
