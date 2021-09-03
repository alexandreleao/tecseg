@extends('layout.tecseg')

@section('titulo', 'Orçamento')
 
@section('content')
    

    <div class="container">

        <h3 class="center">Orçamentos</h3>
        <div class="row">
                {{ csrf_field() }}
            <form class="" action="" method="" enctype = "multipart/form-data">
            {{ csrf_field() }}
                @include('admin.servicos._orcamento')

                 <button class="btn blue darken-3">Salvar</button>
             </form>   
        </div>
    </div>


@endsection