@extends('layouts.app')

<!-- @section('content-header')
    <ol class="breadcrumb">
        <li>Alunos</li>
        <li class="active">Lista</li>
    </ol>
@endsection -->

@section('content')
    @include('flash::message')
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-10">Lista</div>
                <div class="col-md-2">
                    //link botao incluir
                </div>
            </div>
        </div>
        @if(count($books))
            <div class="table-responsive">
                <table class="table table-hover table-general">
                    <thead>
                        <tr>
                            <th>Nome</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($books as $book)
                            <tr>
                                <td>{{ str_limit($book->title, 80) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
@endsection
