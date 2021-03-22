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
          @foreach($servicos as $servico)
            <tr>
              <td>{{ $servico->id }}</td>
              <td>{{ $servico->titulo }}</td>
              <td>{{ $servico->descricao }}</td>
              <td><img height="60" src="{{asset($servico->imagem)}}" alt="{{ $servico->titulo }}" /></td>
              <td>{{ $servico->publicado }}</td>
              <td>
                <a class="btn blue" href="{{ route('admin.servicos.editar',$servico->id) }}">Editar</a>
                <a class="btn red" href="{{ route('admin.servicos.deletar',$servico->id) }}">Deletar</a>
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
