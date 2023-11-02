<?php

require_once __DIR__ . '/../src/database/conexao.php';
require_once __DIR__ . '/../src/dao/usuariodao.php';
require_once __DIR__ . '/../layouts/headerHome.php';
/*session_start();
$_SESSION['id'];*/

# solicita a conexão com o banco de dados e guarda na váriavel dbh.
//$dbh = Conexao::getConexao();


$dao = new UsuarioDAO();
$usuario = $dao->senhaUpdate('$senha', '$id');


?>


<html>

<head>
    <meta charset="utf-8"/>
    <title>Atualizando senha</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css"
</head>

<body>


<div class="container">
    <div class="row">
        <div class="col col-md-12">
            <?php if ($usuario) { ?>
                <div class="container">
                    <h1 class="display-4 text-success">Senha alterada com sucesso</h1>
                    <a href="index.php" class="btn btn-success btn-lg mt-5 text-white">Voltar</a>
                </div>
            <?php } else { ?>
                <div class="container">
                    <h1 class="display-4 text-danger">Erro ao alterar senha</h1>
                    <a href="alterarSenha.php" class="btn btn-danger btn-lg mt-5 text-white">Voltar</a>
                </div>
            <?php } ?>
        </div>
    </div>


</div>


</body>
</html>




