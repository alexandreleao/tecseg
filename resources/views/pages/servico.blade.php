@extends('layout.tecseg')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>{{$servico->titulo}}</h1>
                </div>
                <div class="card-body">
                    {{$servico->descricao}}
                </div>    
            </div>
        </div>
    </div>
</div>
@endsection