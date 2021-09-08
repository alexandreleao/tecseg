<form class="" action="{{$action}}" method="{{ $method }}" enctype="multipart/form-data">
  {{ csrf_field() }}
  <div class="input-field">
    <label>Título</label>
    <input type="text" name="titulo" value="{{isset($servico->titulo) ? $servico->titulo : ''}}">
  </div>

  <div class="input-field">
    <label>Descrição</label>
    <input type="text" name="descricao" value="{{isset($servico->descricao) ? $servico->descricao : ''}}">
  </div>

  <div class="input-field">
    <label>Valor</label>
    <input type="text" name="valor" value="{{isset($servico->valor) ? $servico->valor : ''}}">
  </div>

  <div class="file-field  input-field">
    
    <div class="btn blue">
      <span>Imagem</span>
      <input type="file" name="imagemUpload">
    </div>
    
  </div>

  @if(isset($servico->imagem))
  <div class="input-field">
    <img width="150" src="{{asset($servico->imagem)}}" />
  </div>
  @endif

  <p>
      <input type="checkbox"
          @if(isset($servico->publicado))
              checked
          @endif
          class="filled-in" id="test5" name="publicado">
      <label for="test5">Publicar?</label>
      <br><br>
  </p>

  <button class="btn blue darken-3">Salvar</button>
</form>
