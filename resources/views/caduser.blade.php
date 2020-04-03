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
                <div class="col-sm">
                    <img id="logo" src="<?php echo asset('celivra.png')?>" alt="Logo">
                </div>
            </div>
            <div id="corpo" class="row">
                <form id="cadastro" method="POST" action="/login/salvar">
                    <h2 style="text-align:center;color:#3f8cff">Cadastro</h2>
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">Email</label>
                            <input type="text" name="email" class="form-control" id="inputEmail4" placeholder="Email">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputText">Nome de usuário</label>
                            <input type="text" name="nomeusuario" class="form-control" id="inputText" placeholder="Nome de usuário">
                        </div>
                        <div class="form-group col-md-4">
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
                    <div class="form-row">
                        <div class="form-group col-sm">
                            <label for="inputAddress">Endereço</label>
                            <input type="text" name="endereco" class="form-control" id="inputAddress" placeholder="Rua dos Bobos, nº 0">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm">
                            <label for="inputText">Bairro</label>
                            <input type="text" name="bairro" class="form-control" id="inputText" placeholder="Nome do Bairro">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">Cidade</label>
                            <input type="text" name="cidade" class="form-control" id="inputCity" placeholder="Cidade">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEstado">Estado</label>
                            <select name="estado" id="inputEstado" class="form-control" required>
                                <option value="" disabled selected>Escolher...</option>
                                <option value="AC">AC</option>
                                <option value="AL">AL</option>
                                <option value="AM">AM</option>
                                <option value="AP">AP</option>
                                <option value="BA">BA</option>
                                <option value="CE">CE</option>
                                <option value="DF">DF</option>
                                <option value="ES">ES</option>
                                <option value="GO">GO</option>
                                <option value="MA">MA</option>
                                <option value="MT">MT</option>
                                <option value="MS">MS</option>
                                <option value="MG">MG</option>
                                <option value="PA">PA</option>
                                <option value="PB">PB</option>
                                <option value="PR">PR</option>
                                <option value="PE">PE</option>
                                <option value="PI">PI</option>
                                <option value="RJ">RJ</option>
                                <option value="RN">RN</option>
                                <option value="RS">RS</option>
                                <option value="RR">RR</option>
                                <option value="SC">SC</option>
                                <option value="SE">SE</option>
                                <option value="SP">SP</option>
                                <option value="TO">TO</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm">
                            <label for="inputText">Complemento</label>
                            <input type="text" name="complemento" class="form-control" id="inputText" placeholder="Complemento">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputText">Data de Nascimento</label>
                            <input type="text" name="datanasc" class="form-control" id="inputText" placeholder="Data de Nascimento">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputSexo">Sexo</label>
                            <select name="sexo" id="inputSexo" class="form-control">
                                <option selected>Escolher...</option>
                                <option>Feminino</option>
                                <option>Masculino</option>
                                <option>Não definido</option>
                            </select>
                        </div>
                    </div>
                    <div class="text-right">
                        <button id="cadastro" type="submit" class="btn btn-primary">Cadastrar</button>
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
