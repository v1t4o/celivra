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
    return view('welcome');
});
*/

//Rotas de Login
Route::get('/', 'LoginController@inicial');
Route::post('/login', 'LoginController@login');
Route::post('/login/salvar', 'LoginController@svuser');
Route::get('/login/cadastrar','LoginController@caduser');
//Rotas de saída de sistema
Route::get('/sair', 'LoginController@sair');


//Rotas de dashboard
Route::get('/dashboard','LoginController@menu');

//Rotas de Livros
Route::get('/livro/listar', 'LivroController@listlivro');
Route::post('/livro/salvar', 'LivroController@salvalivro');
Route::get('/livro/cadastrar','LivroController@cadlivro');
/*Route::get('/{livro}', 'LivroController@listar');*/
