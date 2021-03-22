@extends('layout.tecseg')

@section('titulo', 'contato')

@section('content')

<div class="container">
    <h3 class="center">Cadastre-se para obter o seu orçamento</h3>
    <div class="row">
        <form class="" action="{{route('site.contato.salvar')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @include('admin.servicos._contato')

            <button class="btn blue darken-3">Salvar</button>
        </form>
    </div>
</div>

@endsection
