   @extends('layout.tecseg')

   @section('titulo','Contatos')

   @section('content')
   
        <h3>Lista de Contatos</h3>

        @foreach($contatos as $contato)

        <ul>{{$contato['nome']}}</ul>
        <ul>{{$contato['e-mail']}}</ul>
        <ul>{{$contato['telefone']}}</ul>

        @endforeach
  @endsection