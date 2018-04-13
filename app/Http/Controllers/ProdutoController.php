<?php namespace App\Http\Controllers;

  use Illuminate\Support\Facades\DB;
  use Request;

  class ProdutoController extends Controller {
    public function lista(){
      $produtos = DB::select('select * from produtos');

      return view('listagem')->with('produtos', $produtos);
    }

    public function mostra(){
      $id = Request::route('id');
      $produtos = DB::select('select * from produtos where id = ?', [$id]);
      return view('detalhes')->with('produtos', $produtos[0]);
    }

    public function novo(){
      return view('formulario');
    }

    public function adiciona(){

      $nome = Request::input('nome');
      $valor = Request::input('valor');
      $quantidade = Request::input('quantidade');
      $descricao = Request::input('descricao');

      DB::insert('insert into produtos (nome, quantidade, valor, descricao) values (?, ?, ?, ?)', array($nome, $quantidade, $valor, $descricao));

      return redirect('/produtos')->withInput();
    }
  }
?>
