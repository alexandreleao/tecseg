@extends('layout.tecseg')

@section('titulo', 'Orçamento')
 
@section('content')
    

    <div class="container">

        <h3 class="center">Orçamentos</h3>
        <div class="row">
                
            
                @include('forms.orcamento', [
                    'action' => route('salvar.orcamento'),
                    'method' => 'POST'
                ])

                  
        </div>
    </div>


@endsection