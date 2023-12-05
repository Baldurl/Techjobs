<?php
session_start();
require_once __DIR__ . '/../../src/database/conexao.php';
require_once __DIR__ . '/../../src/dao/usuariodao.php';
require_once __DIR__ . '/../../auth/permissoes.php';






# executa o loop para ler os campos retornados da tabela pelos indices do array.
# começando no valor zero. Guarda o valor de cada linha na variável $row.

?>

<!doctype html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="" type="">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
          integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous"/>
    <link href="https://unpkg.com/progressive-image@1.2.0/dist/index.css" rel="stylesheet" type="text/css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/usuario.css">
    <link rel="stylesheet" href="../../assets/css/button.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <title>Tech Jobs - Informações</title>
</head>
<body>
<header class="main-header">

    <nav class="main-header-content">

        <div class="logo">
            <a href="../../view/home.php">
                <img src="../../assets/img/Tech%20(1).svg" alt="" width="200px" height="100px">
            </a>
        </div>


        <nav class="menu">


            <ul>
                <li class="item-menu">
                    <a href="../../view/home.php">
                        <span class="icon"><i class="bi bi-house-door"></i></span>
                        <span class="txt-link">Home</span>
                    </a>
                </li>
                <li class="item-menu">
                    <a href="../../view/blog.php">
                        <span class="icon"><i class="bi bi-columns"></i></span>
                        <span class="txt-link">Blog</span>
                    </a>
                </li>

                <!--Colocar condição de acesso à configuração.
Se for um candidato, ele pode alterar dados sendo um perfil candidato.
Se for um empresa, ele pode alterar dados sendo um perfil empresa. -->


                <?php if ($perfil_id == 1) { ?>
                    <li class="item-menu">
                        <a href="index.php">
                            <span class="icon"><i class="bi bi-person"></i></span>
                            <span class="txt-link">Perfil</span>
                        </a>
                    </li>
                <?php } else if ($perfil_id == 2) { ?>
                    <li class="item-menu">
                        <a href="index.php">
                            <span class="icon"><i class="bi bi-person"></i></span>
                            <span class="txt-link">Perfil</span>
                        </a>
                    </li>
                <?php } else if ($perfil_id == 3) { ?>
                    <li class="item-menu">
                        <a href="index.php">
                            <span class="icon"><i class="bi bi-person"></i></span>
                            <span class="txt-link">Perfil</span>
                        </a>
                    </li>
                <?php } ?>


                <li class="item-menu">
                    <a href="../../auth/logoff.php">
                        <span class="icon"><i class="bi bi-box-arrow-right"></i></span>
                        <span class="txt-link">Logoff</span>
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
                            <span class="card-information-header"><h1>Olá, <?php echo ucfirst($usuario[1]); ?>!<br>Aqui estão suas informações...</h1></span>
                            <!--INFORMAÇÕES DA CONTA DO USUÁRIO-->



                            <div class="card-information-box-text">
                                <div><h2>Nome: </h2></div>
                                <div><h2><?php echo ucfirst($usuario[1]); ?></h2></div>
                            </div>

                            <div class="card-information-box-text">
                                <div><h2>Cpf: </h2></div>
                                <div><h2><?php echo $usuario[3]; ?></h2></div>
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




