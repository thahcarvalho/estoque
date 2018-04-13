@extends('principal')

@section('conteudo')
    <h1>Detalhes do produto {{ $produtos->nome }}</h1>

    <ul>
      <li>
          Descrição: {{ $produtos->descricao or 'não tem descrição'}}
      </li>
      <li>
          Valor: {{ $produtos->valor }}
      </li>
      <li>
          Quantidade: {{ $produtos->quantidade }}
      </li>
    </ul>
@stop
