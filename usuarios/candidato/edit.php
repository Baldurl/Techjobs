<?php
session_start();
require_once __DIR__ . '/../../layouts/header.php';
require_once __DIR__ . '/../../src/database/conexao.php';
require_once __DIR__ . '/../../src/dao/usuariodao.php';

$id = $_SESSION['usuario']['id'];
$dao = new Usuariodao();
$usuario = $dao->getById($id);

if (!$usuario) {
    header('location: edit.php?error=Usuário não encontrado!');
    exit;
}


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


    <title>Tech Jobs - Configurações</title>
</head>

<body>


<main class="main-candidato">

    <div class="main-information">


        <div class="card-information">

            <!-- INFORMAÇÕES DA SESSÃO DO USUÁRIO
        <hr>
        <h1><?php /*echo $_SESSION['usuario']['id']; */ ?></h1>
        <h2><?php /*echo $_SESSION['usuario']['nome']; */ ?></h2>
        <h3><?php /*echo $_SESSION['usuario']['email']; */ ?></h3>
        <hr>
        -->
            <div class="container">

                <div class="row text ">

                    <div class="col-md-12">
                        <div class="card-body font-weight-bold card-information-main">

                            <div class="card-information-box">
                                <span class="card-information-header"><h1>Informações</h1></span>
                                <!--INFORMAÇÕES DA CONTA DO USUÁRIO-->

                                <div class="card-information-box-text">
                                    <div><h2>ID: </h2></div>
                                    <div><h2><?php echo $usuario[0]; ?></h2></div>
                                </div>

                                <div class="card-information-box-text">
                                    <div><h2>Nome: </h2></div>
                                    <div><h2><?php echo $usuario[1]; ?></h2></div>
                                </div>

                                <div class="card-information-box-text">
                                    <div><h2>Cpf: </h2></div>
                                    <div><h2><?php echo $usuario[3]; ?></h2></div>
                                </div>

                                <div class="card-information-box-text">
                                    <div><h2>Senha: </h2></div>
                                    <div><h2><?php echo $usuario[5]; ?></h2></div>
                                </div>

                                <div class="card-information-box-text">
                                    <div><h2>Email: </h2></div>
                                    <div><h2><?php echo $usuario[6]; ?></h2></div>
                                </div>
                            </div>


                            <div class="card-information-box">
                                <span class="card-information-header"><h1>Alterar usuário</h1></span>
                                <form action="update.php" method="post">


                                    <div class="row text">
                                        <div class="form-group card-candidato-content">
                                            <input name="name" type="text" class="form-control"
                                                   id="name"
                                                   placeholder="Nome">

                                            <input name="senha" type="text" class="form-control"
                                                   id="senha"
                                                   placeholder="Senha">
                                        </div>
                                    </div>
                                    <div class="update-group-btns">
                                        <button type="submit" class="btn btn-primary btn-lg ">Alterar

                                        </button>

                                        <a href="index.php">
                                            <button type="button" class="btn btn-primary btn-lg ">
                                                Voltar
                                            </button>
                                        </a>
                                    </div>
                                </form>
                            </div>

                            <div class="group-btns">


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</main>


</body>

</html>