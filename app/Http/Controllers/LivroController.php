<?php
//Autor: Victor de Oliveira
//Criação do projeto: 09/03/2020
//Autor da última atualização: Victor
//Data última atualização: 11/03/2020
namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*Linha de comando para utilizar a conexão já criada pelo framework de acesso ao BD*/
use App\Livro;

class LivroController extends Controller
{
    
    //Função para listagem de livros cadastrados
    public function listlivro(){
        $livros = Livro::all();
        return view ('listlivro',compact('livros'));
    }

    //Função para redirecionamento para tela de cadastro.
    public function cadlivro(){
        return view ('cadlivro');
    }

    //Função para salvamento de cadastro de livro no banco de dados
    public function salvalivro(Request $cadlivro){
        $objlivro = new Livro;
        $objlivro->titulo = $cadlivro->titulo;
        $objlivro->autor = $cadlivro->autor;
        $objlivro->isbn = $cadlivro->isbn;
        $objlivro->procedencia = $cadlivro->procedencia;
        $objlivro->save();
        return redirect("/livro/listar");
    }
}