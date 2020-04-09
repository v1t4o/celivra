<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo asset('app.scss')?>" type="text/css">
        <title>celivra</title>
        
    </head>
    <body>
        <div class="container">
            <div class="row" id="cab">
                <div class="col">
                <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#3f8cff">
                    <a class="navbar-brand" href="/dashboard">
                        <img id="logo" src="<?php echo asset('celivra.png')?>" alt="Logo" width="30" height="30" alt="Logo">
                    </a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="/dashboard">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Livros
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/livro/cadastrar">Cadastrar Livro</a>
                                    <a class="dropdown-item" href="/dashboard">Meus Livros</a>
                                </div>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="/sair">Sair <span class="sr-only">(current)</span></a>
                            </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar livros..." aria-label="Search">
                            <button class="btn btn-light my-2 my-sm-0" type="submit">Pesquisar</button>
                        </form>
                    </div>
                </nav>
                </div>
            </div>
            <div id="corpo" class="row">
                <form id="cadastro" method="post" action="/livro/atualizar/<?php echo $resultado->titulo; ?>">
                    <h2 style="text-align:center;color:#3f8cff">Cadastro de Livro</h2>
                    @csrf
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="inputText">Título</label>
                            <input name="titulo" value="<?php print $resultado->titulo;?>" type="text" class="form-control" id="inputText" placeholder="Título do Livro">
                        </div>
                        <div class="form-group col">
                            <label for="inputText">Autor</label>
                            <input name="autor" value="<?php print $resultado->autor;?>" type="text" class="form-control" id="inputText" placeholder="Autor do Livro">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputText">Ano de Publicação</label>
                            <input name="ano" value="<?php print $resultado->ano;?>" type="text" class="form-control" id="inputText" placeholder="Ano de publicação do Livro">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputText">Edição</label>
                            <input name="edicao" value="<?php print $resultado->edicao;?>" type="text" class="form-control" id="inputText" placeholder="Edição do Livro">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputText">Editora</label>
                            <input name="editora" value="<?php print $resultado->editora;?>" type="text" class="form-control" id="inputText" placeholder="Editora do Livro">
                        </div>
                    </div>
                    <div class="form-row">        
                        <div class="form-group col">
                            <label for="inputText">ISBN</label>
                            <input name="isbn" value="<?php print $resultado->isbn;?>" type="text" class="form-control" id="inputText" placeholder="ISBN do Livro">
                        </div>
                        <div class="form-group col">
                            <label for="inputText">Quantidade de páginas</label>
                            <input name="numpaginas" value="<?php print $resultado->numpaginas;?>" type="text" class="form-control" id="inputText" placeholder="Quantidade de páginas do Livro">
                        </div>
                        <div class="form-group col">
                            <label for="inputText">Quantidade de Item</label>
                            <input name="quantidade" value="<?php print $resultado->quantidade;?>" type="text" class="form-control" id="inputText" placeholder="Quantidade a ser cadastrada">
                        </div>
                        <div class="form-group col">
                            <label for="inputText">Disponibilidade</label>
                            <select value="<?php print $resultado->disponibilidade;?>" name="disponibilidade" id="inputDisponibilidade" class="form-control">
                                <option selected>Escolher...</option>
                                <option>Troca</option>
                                <option>Doação</option>
                                <option>Troca/Doação</option>
                                <option>Nenhuma</option>
                            </select>            
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="inputText">Descrição do Livro</label>
                            <input name="descritem" value="<?php print $resultado->descritem;?>" type="text" class="form-control" id="inputText" placeholder="Descrição do Livro">
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>
                </form>
            </div>
            <footer id="rdp">
                celivra @2020 - Direitos reservados
            </footer>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
