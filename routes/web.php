<?php

use Illuminate\Support\Facades\Route;


//Rotas de Login
Route::get('/', 'UsuarioController@inicial');
Route::post('/login', 'UsuarioController@login');
Route::post('/login/salvar', 'UsuarioController@svuser');
Route::get('/login/cadastrar','UsuarioController@caduser');

//Rotas de saída de sistema
Route::get('/sair', 'UsuarioController@sair');

//Rotas de dashboard
Route::get('/dashboard','LivroController@listlivro');

//Rotas de Livros
//Route::get('/livro/listar', 'LivroController@listlivro');
Route::post('/livro/salvar', 'LivroController@salvalivro');
Route::post('/livro/atualizar/{livro}', 'LivroController@atualizalivro');
Route::get('/livro/editar/{livro}','LivroController@redvieweditlivro');
Route::get('/livro/cadastrar','LivroController@redviewcadlivro');
Route::get('/livro/excluir/{livro}','LivroController@excluilivro');

?>