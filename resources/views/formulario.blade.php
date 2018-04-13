@extends('principal')

@section('conteudo')

<form class="" action="/produtos/adicionado" method="post">
    <input value="{{ csrf_token() }}" type="hidden" name="_token"/>
    <div class="form-group">
      <label>Nome</label>
      <input name="nome" class="form-control"/>
    </div>
    <div class="form-group">
      <label>Valor</label>
      <input name="valor" class="form-control"/>
    </div>
    <div class="form-group">
      <label>Quantidade</label>
      <input name="quantidade" class="form-control"/>
    </div>
    <div class="form-group">
      <label>Descrição</label>
      <textarea name="descricao" class="form-control"></textarea>
    </div>

    <button type="submit" name="button" class="btn btn-default">Adicionar</button>
</form>

@stop
