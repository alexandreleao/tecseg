@extends('layout.tecseg')

@section('titulo','portifolio')

@section('content')
  <div class="container">
    <h3 class="center">Portifólio de Serviços</h3>
    <div class="row">
        @foreach($servicos as $servico)
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="{{ asset($servico->imagem)}}">
            </div>
            <div class="card-content">
                <h4>{{$servico->titulo}}</h4>
              <p>{{$servico->descricao}}</p>
            </div>
            <div class="card-action">
              <a href="{{route('servico.id', ['id' => $servico->id])}}">Ver mais...</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    
  </div>

@endsection
