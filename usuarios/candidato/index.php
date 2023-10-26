<?php
session_start();
require_once __DIR__ . '/../../src/database/conexao.php';
require_once __DIR__ . '/../../src/dao/usuariodao.php';

$id = $_SESSION['usuario']['id'];
$dao = new UsuarioDAO();
$usuario = $dao->getById('$id');


if (!$usuario) {
    header('location: save.php?error=Usuário não encontrado!');
    exit;

}


# executa o loop para ler os campos retornados da tabela pelos indices do array.
# começando no valor zero. Guarda o valor de cada linha na variável $row.

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../../assets/css/button.css" rel="stylesheet">
    <link href="../../assets/css/style.css" rel="stylesheet">
    <link href="../../assets/css/usuario.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <title>Tech Jobs - Informações</title>
</head>
<body>
<header class="main-header">

    <nav class="main-header-content">

        <div class="logo">
            <a href="../../auth/home.php">TechJobs</a>
        </div>

        <nav class="menu">

            <ul>
                <li class="item-menu">
                    <a href="../../index.php">
                        <span class="icon"><i class="bi bi-house-door"></i></span>
                        <span class="txt-link">Home</span>
                    </a>
                </li>


            </ul>


        </nav>
    </nav>
</header>

<main class="main-information">

    <?php if (isset($_GET['msg']) && $_GET['msg'] == 'sucesso') { ?>
        <div class="update-confirmation-success">
            <div class="update-confirmation-header">
                <h2>Dados alterados com sucesso!</h2>
            </div>
        </div>
    <?php } else if (isset($_GET['msg']) && $_GET['msg'] == 'erro') { ?>

    <div class="update-confirmation-error">

        <div class="update-confirmation-header">
            <h2>Erro ao alterar dados!</h2>
        </div>


        <?php } ?>
    </div>
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
                            <div class="btn-group">
                                <a class="btnalterar" href="edit.php?id=<?php $usuario[0]; ?>">Alterar dados</a>
                                <a class="btnexcluir" href="delete.php?id=<?php $usuario[0]; ?>"
                                   onclick="return confirm('Deseja confirmar a operação?');">Deletar conta</a>
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


<!--

-->




