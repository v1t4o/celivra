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
                                <a class="nav-link" href="sair">Sair <span class="sr-only">(current)</span></a>
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
                <div id="consulta" class="col">
                    <h2 style="text-align:center;color:#3f8cff">Meus livros cadastrados</h2>
                    <table class="itens" align="center">
                        <tr class="linha">
                            <td class="cabecalho">Titulo</td>
                            <td class="cabecalho">Autor</td>
                            <td class="cabecalho">Ano de Publicação</td>
                            <td class="cabecalho">Edição</td>
                            <td class="cabecalho">Editora</td>
                            <td class="cabecalho">ISBN</td>
                            <td class="cabecalho">Quantidade de páginas</td>
                            <td class="cabecalho">Quantidade de Item</td>
                            <td class="cabecalho">Disponibilidade</td>
                            <td class="cabecalho">Descrição do Item</td>
                            <td class="cabecalho">Editar</td>
                            <td class="cabecalho">Excluir</td>
                        </tr>
                        @foreach($livros as $livro)
                        <tr class="linha">
                            <td class="item">{{ $livro->titulo }}</td>
                            <td class="item">{{ $livro->autor }}</td>
                            <td class="item">{{ $livro->ano }}</td>
                            <td class="item">{{ $livro->edicao }}</td>
                            <td class="item">{{ $livro->editora }}</td>
                            <td class="item">{{ $livro->isbn }}</td>
                            <td class="item">{{ $livro->numpaginas }}</td>
                            <td class="item">{{ $livro->quantidade }}</td>
                            <td class="item">{{ $livro->disponibilidade }}</td>
                            <td class="item">{{ $livro->descritem }}</td>
                            <td class="item">
                                <a href="/livro/editar/<?php echo $livro->titulo?>">Editar</a>
                            </td>
                            <td class="item">
                                <a href="/livro/excluir/<?php echo $livro->titulo?>">Excluir</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
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
