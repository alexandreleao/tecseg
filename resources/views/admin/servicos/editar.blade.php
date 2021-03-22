 @extends('layout.tecseg')

   @section('titulo','Serviços')

   @section('content')
        <div class="container">
             <h3 class="center">Editar Serviços</h3>
             <div class="row">
                <form class="" action="{{route('admin.servicos.atualizar',$servico->id)}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="put">
                    @include('admin.servicos._form')

                    <button class="btn blue darken-3">Atualizar</button>
                </form>
             </div>
        </div>
  @endsection
