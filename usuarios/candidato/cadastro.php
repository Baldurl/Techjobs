<?php
require_once __DIR__ . '/../../layouts/header.php';
require_once __DIR__ . '/../../layouts/nav.php';


?>


<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,
     initial-scale=1, shrink-to-fit=no">

    <!--Estilo CSS -->
    <link rel="stylesheet" href="../../assets/css/cadastro.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <title>Tech Jobs - Candidato</title>
</head>

<body>


<main class="main-candidato">
    <div class="card-candidato">
        <h2>Criar uma nova conta de usuário</h2>

        <form action="create.php" method="post">
            <div class="container">

                <div class="row text">
                    <div class="col-md-12">
                        <div class="card-body font-weight-bold">

                            <div class="form-group card-candidato-content">

                                <input name="name" type="text" class="form-control" id="name"
                                       placeholder="Nome">


                                <input name="email" type="email" class="form-control" id="email"
                                       placeholder="E-mail">

                                <div class="card-candidato-content-row">
                                    <div class="form-group col-xs-3">
                                        <label for="cpf">Cpf</label>
                                        <input name="cpf" type="cpf" class="form-control" id="cpf"
                                               placeholder="00-000-000-00">
                                    </div>


                                    <div class="form-group col-xs-3">

                                        <label for="ddd"> DDD</label>
                                        <input name="ddd" type="ddd" class="form-control" id="ddd"
                                               placeholder="00">
                                    </div>


                                    <div class="form-group col-xs-3">
                                        <label for="telefone">Telefone</label>
                                        <input name="telefone" type="telefone" class="form-control" id="telefone"
                                               placeholder="00000-0000">
                                    </div>
                                </div>

                                <input name="senha" type="password" class="form-control" id="senha"
                                       placeholder="Senha">


                                <input name="senha2" type="password" class="form-control" id="senha2"
                                       placeholder="Confirme a senha">

                                <input type="hidden" id="perfil" name="perfil" value="2">
                            </div>
                        </div>
                    </div>


                    <button type="submit" class="btn btn-primary btn-lg btn-login">Cadastrar</button>
                    <p class="text"><a href="../../login/login.php">Já tem uma conta?</a></p>
                </div>
            </div>
        </form>
    </div>


</main>


</body>

</html>