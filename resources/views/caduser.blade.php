<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>celivra</title>
        
    </head>
    <body>
        <h1>Cadastro de Usuário</h1>
        <form method="POST" action="/login/salvar">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="text" name="email" class="form-control" id="inputEmail4" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputText">Nome de usuário</label>
                    <input type="text" name="nomeusuario" class="form-control" id="inputText" placeholder="Nome de usuário">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Senha</label>
                    <input type="password" name="senha" class="form-control" id="inputPassword4" placeholder="Senha">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputText">Nome</label>
                    <input type="text" name="nome" class="form-control" id="inputText" placeholder="Nome">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputText">Sobrenome</label>
                    <input type="text" name="sobrenome" class="form-control" id="inputText" placeholder="Sobrenome">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Endereço</label>
                <input type="text" name="endereco" class="form-control" id="inputAddress" placeholder="Rua dos Bobos, nº 0">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputText">Bairro</label>
                    <input type="text" name="bairro" class="form-control" id="inputText" placeholder="Nome">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">Cidade</label>
                    <input type="text" name="cidade" class="form-control" id="inputCity" placeholder="Cidade">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEstado">Estado</label>
                    <select name="estado" id="inputEstado" class="form-control">
                        <option selected>Escolher...</option>
                        <option>...</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputText">Complemento</label>
                    <input type="text" name="complemento" class="form-control" id="inputText" placeholder="Complemento">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputText">Data de Nascimento</label>
                    <input type="text" name="datanasc" class="form-control" id="inputText" placeholder="Data de Nascimento">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputSexo">Sexo</label>
                    <select name="sexo" id="inputSexo" class="form-control">
                        <option selected>Escolher...</option>
                        <option>Feminino</option>
                        <option>Masculino</option>
                        <option>Não definido</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
