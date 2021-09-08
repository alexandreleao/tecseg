@extends('layout.tecseg')

@section('titulo','home')

@section('content')

@include('componentes.slider')
<div class="container">
    <div class="row">
        <h3 class="center">Serviços</h3>
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

<div class="container" id="app">
    <span v-bind:title="message">
        Hover your mouse over me for a few seconds to see my dynamically bound
        title!
    </span>
    <ul>
        <li v-for="servico in servicos" @click="getServico(servico.id)">
            @{{servico.id}} - @{{servico.titulo}}
        </li>
    </ul>
</div>

@endsection


@section('js')
<script>

const AttributeBinding = {
  data() {
    return {
      message: 'Você carregou essa página: ' + new Date().toLocaleString(),
      servicos: JSON.parse(@json($servicos->toJson()))
    }
  },
  methods:{
    getServico(id)
    {
        const URLservico = `/servicos/json/${id}`
        console.log(URLservico);
        $.ajax({
            url: URLservico,
            dataType: "json"
        }).done(function(resp) {
            console.log(resp)
        });
    }
  }
}

Vue.createApp(AttributeBinding).mount('#app')

</script>
@endsection
