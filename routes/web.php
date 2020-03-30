<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('login');
})
*/

//Rotas de Login
Route::get('/', 'UsuarioController@inicial');
Route::post('/login', 'UsuarioController@login');
Route::post('/login/salvar', 'UsuarioController@svuser');
Route::get('/login/cadastrar','UsuarioController@caduser');
//Rotas de saída de sistema
Route::get('/sair', 'UsuarioController@sair');


//Rotas de dashboard
Route::get('/dashboard','UsuarioController@menu');

//Rotas de Livros
Route::get('/livro/listar', 'LivroController@listlivro');
Route::post('/livro/salvar', 'LivroController@salvalivro');
Route::get('/livro/cadastrar','LivroController@cadlivro');
/*Route::get('/{livro}', 'LivroController@listar');*/

