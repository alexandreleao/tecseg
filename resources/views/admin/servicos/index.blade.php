@extends('layout.tecseg')

@section('titulo','Serviços')

@section('content')
  <div class="container">
    <h3 class="center">Lista de Serviços</h3>
    <div class="row">
      <table>
        <thead>
          <tr>
            <th>Id</th>
            <th>Título</th>
            <th>Descrição</th>
            <th>Imagem</th>
            <th>Publicado</th>
            <th>Ação</th>
          </tr>
        </thead>
        <tbody>
          @foreach($registros as $registro)
            <tr>
              <td>{{ $registro->id }}</td>
              <td>{{ $registro->titulo }}</td>
              <td>{{ $registro->descricao }}</td>
              <td><img height="60" src="{{asset($registro->imagem)}}" alt="{{ $registro->titulo }}" /></td>
              <td>{{ $registro->publicado }}</td>
              <td>
                <a class="btn blue" href="{{ route('admin.servicos.editar',$registro->id) }}">Editar</a>
                <a class="btn red" href="{{ route('admin.servicos.deletar',$registro->id) }}">Deletar</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="row">
      <a class="btn blue" href="{{ route('admin.servicos.adicionar') }}">Adicionar</a>
    </div>

  </div>




@endsection
