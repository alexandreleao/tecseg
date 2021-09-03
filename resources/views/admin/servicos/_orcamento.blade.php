<div class="input-field">
   <label>Nome do Cliente</label>
  <input type="text" name="nome" value="{{isset($orcamento->nome) ? $orcamento->nome : ''}}">
 
</div>

<div class="input-field">
   <label>Endereço</label>
  <input type="text" name="orcamentoCliente" value="{{isset($orcamento->enderecoCliente) ? $orcamento->enderecoCliente : ''}}">
 
</div>

<div class="input-field">
   <label>Telefone</label>
  <input type="text" name="telefone" value="{{isset($orcamento->telefone) ? $orcamento->telefone  : ''}}">
 
</div>

<div class="input-field">
   <label>Quantidade</label>
  <input type="text" name="qtdd" value="{{isset($orcamento->qtdd) ? $orcamento->qtdd : ''}}">
 
</div>

<div class="input-field">
   <label>Descrição</label>
  <input type="text" name="descricao" value="{{isset($orcamento->descricao) ? $orcamento->descricao : ''}}">
 
</div>

<div class="input-field">
   <label>Valor</label>
  <input type="text" name="valor" value="{{isset($orcamento->valor) ? $orcamento->valor : ''}}">
 
</div>

<div class="input-field">
   <label>Valor Total</label>
  <input type="text" name="valorTotal" value="{{isset($orcamento->valorTotal) ? $orcamento->valorTotal : ''}}">
 
</div>
