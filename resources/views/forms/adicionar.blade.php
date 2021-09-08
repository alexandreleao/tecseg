 @extends('layout.tecseg')

   @section('titulo','Adicionar')

   @section('content')
        <div class="container">
             <h3 class="center">Adicionar Serviços</h3>
             <div class="row">
                
                    @include('forms.servico', [
                     'action' => route('admin.servicos.adicionar'),
                     'method' => 'POST'
                    ])
                    
                    
             </div>  
             <div class="row">
                @include('componentes.erros', ['errors' => $errors])
             </div> 
        </div>   
  @endsection