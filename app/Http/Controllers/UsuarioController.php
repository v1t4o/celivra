<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class UsuarioController extends Controller
{
    //Função para página inicial
    public function inicial(){
        return view ('login');
    }
    
    // //Função para verificação de Login
    //v.1
    public function login(Request $dados){
        $objuser = new Usuario;
        $user = $dados->get("usuario");
        $pass = $dados->get("senha");
        if( $user == "admin" && $pass == 123456){
            return view ('dashboard');
        }
        else{
            return view ('login');
        }
    }
    
    //v.2
    ////Função para listagem de pessoas cadastradas
    /*public function listpessoa(){
        $pessoa = Pessoa::all();
        return view ('listpessoa',compact('pessoas'));
    }*/

    //Função para redirecionamento para tela de cadastro.
    public function caduser(){
        return view ('caduser');
    }

    public function sair(){
        return redirect("/");
    }

    public function menu(){
        return view ('dashboard');
    }

    //Função para salvamento de cadastro de livro no banco de dados
    public function svuser(Request $caduser){
        $objuser = new Usuario;
        $objuser->usuario = $caduser->usuario;
        $objuser->senha = $caduser->senha;
        $objuser->email = $caduser->email;
        $objuser->save();
        return redirect("/");
    }
}