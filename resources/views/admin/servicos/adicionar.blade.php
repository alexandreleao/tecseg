 @extends('layout.tecseg')

   @section('titulo','Adicionar')

   @section('content')
        <div class="container">
             <h3 class="center">Adicionar Serviços</h3>
             <div class="row">
                <form class="" action="{{route('admin.servicos.salvar')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @include('admin.servicos._form')
                    
                    <button class="btn blue darken-3">Salvar</button>
                </form>
             </div>  
             <div class="row">
                @include('componentes.erros', ['errors' => $errors])
             </div> 
        </div>   
  @endsection