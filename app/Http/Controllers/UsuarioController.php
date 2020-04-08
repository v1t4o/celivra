<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Usuario;

class UsuarioController extends Controller
{
    public function inicial(){
        return view ('login');
    }

    /*// //Função para verificação de Login
    //v.1
    public function login(Request $dados){
        $user = $dados->get("usuario");
        $pass = $dados->get("senha");
        if( $user == "admin" && $pass == 123456){
            return redirect ('/dashboard');
        }
        else{
            return view ('login');
        }
    }*/

    //Função para verificação de Login 2.0
    public function login(Request $dados){
        $usuario = $dados->get("usuario");
        $senha = $dados->get("senha");
        $autenticacao = DB::table('usuarios')->where('nomeusuario', $usuario)->first();
        if($autenticacao != false && strval($autenticacao->senha) == strval($senha)){
            return redirect ('/dashboard');
        }
        else{
            return view ('login');
        }
    }

    //Função para redirecionamento para tela de cadastro.
    public function caduser(){
        return view ('caduser');
    }

    public function sair(){
        return redirect("/");
    }

    //Função para salvamento de cadastro de livro no banco de dados
    public function svuser(Request $caduser){
        $objuser = new Usuario;
        $objuser->email = $caduser->email;
        $objuser->nomeusuario = $caduser->nomeusuario;
        $objuser->nome = $caduser->nome;
        $objuser->sobrenome = $caduser->sobrenome;
        $objuser->endereco = $caduser->endereco;
        $objuser->bairro = $caduser->bairro;
        $objuser->cidade = $caduser->cidade;
        $objuser->estado = $caduser->estado;
        $objuser->complemento = $caduser->complemento;
        $objuser->datanasc = $caduser->datanasc;
        $objuser->sexo = $caduser->sexo;
        $objuser->senha = $caduser->senha;
        $objuser->save();
        return redirect("/");
    }
}

