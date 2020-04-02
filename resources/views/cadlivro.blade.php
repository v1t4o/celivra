<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>celivra</title>
        
    </head>
    <body>
        <h1>Cadastro de Livros</h1>
        <form method="post" action="/livro/salvar">
            <div class="form-group">
                <label for="inputText">Título</label>
                <input type="text" class="form-control" id="inputText" placeholder="Título do Livro">
            </div>
            <div class="form-group">
                <label for="inputText">Autor</label>
                <input type="text" class="form-control" id="inputText" placeholder="Autor do Livro">
            </div>
            <div class="form-group">
                <label for="inputText">Ano de Publicação</label>
                <input type="text" class="form-control" id="inputText" placeholder="Ano de publicação do Livro">
            </div>
            <div class="form-group">
                <label for="inputText">Edição</label>
                <input type="text" class="form-control" id="inputText" placeholder="Edição do Livro">
            </div>
            <div class="form-group">
                <label for="inputText">Editora</label>
                <input type="text" class="form-control" id="inputText" placeholder="Editora do Livro">
            </div>
            <div class="form-group">
                <label for="inputText">ISBN</label>
                <input type="text" class="form-control" id="inputText" placeholder="ISBN do Livro">
            </div>
            <div class="form-group">
                <label for="inputText">Quantidade de páginas</label>
                <input type="text" class="form-control" id="inputText" placeholder="Quantidade de páginas do Livro">
            </div>
            <div class="form-group">
                <label for="inputText">Quantidade de Item</label>
                <input type="text" class="form-control" id="inputText" placeholder="Quantidade a ser cadastrada">
            </div>
            <div class="form-group">
                <label for="inputText">Disponibilidade</label>
                <select id="inputDisponibilidade" class="form-control">
                    <option selected>Escolher...</option>
                    <option>Troca</option>
                    <option>Doação</option>
                    <option>Troca/Doação</option>
                    <option>Nenhuma</option>
                </select>            
            </div>
            <div class="form-group">
                <label for="inputText">Descrição do Livro</label>
                <input type="text" class="form-control" id="inputText" placeholder="Descrição do Livro">
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
