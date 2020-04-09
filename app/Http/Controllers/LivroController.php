<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
/*Linha de comando para utilizar a conexão já criada pelo framework de acesso ao BD*/
use App\Livro;

class LivroController extends Controller
{
    
    //Função para listagem de livros cadastrados
    public function listlivro(){
        $livros = Livro::all();
        return view ('dashboard',compact('livros'));
    }

    //Função para redirecionamento para tela de cadastro.
    public function redviewcadlivro(){
        return view ('cadlivro');
    }

    public function redvieweditlivro($livro){
        $resultado = DB::table('livros')->where('titulo', $livro)->first();
        return view ('atualivro', compact('resultado'));
    }
        
    public function atualizalivro($livro, Request $item){
        $autenticacao = DB::table('livros')->where('titulo', $livro)->update(['titulo' => $item->titulo, 'autor' => $item->autor, 'ano' => $item->ano, 'edicao' => $item->edicao, 'editora' => $item->editora, 'isbn' => $item->isbn, 'numpaginas' => $item->numpaginas, 'quantidade' => $item->quantidade, 'disponibilidade' => $item->disponibilidade, 'descritem' => $item->descritem,]);
        return redirect("/dashboard");
    }
    
    public function excluilivro($livro){
        DB::table('livros')->where('titulo', $livro)->delete();
        return redirect("/dashboard");
    }

    //Função para salvamento de cadastro de livro no banco de dados
    public function salvalivro(Request $cadlivro){
        $objlivro = new Livro;
        $objlivro->idusuario = "0";
        $objlivro->titulo = $cadlivro->titulo;
        $objlivro->autor = $cadlivro->autor;
        $objlivro->ano = $cadlivro->ano;
        $objlivro->edicao = $cadlivro->edicao;
        $objlivro->editora = $cadlivro->editora;
        $objlivro->isbn = $cadlivro->isbn;
        $objlivro->numpaginas = $cadlivro->numpaginas;
        $objlivro->quantidade = $cadlivro->quantidade;
        $objlivro->disponibilidade = $cadlivro->disponibilidade;
        $objlivro->descritem = $cadlivro->descritem;
        $objlivro->fotoitem = "";
        $objlivro->save();
        return redirect("/dashboard");
    }
}