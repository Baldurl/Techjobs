<?php
require_once __DIR__ . '/../auth/validarAcesso.php';
require_once __DIR__ . '/../src/dao/vagadao.php';
require_once __DIR__ . '/../src/dao/usuariodao.php';

$dao = new VagaDAO();
$vaga = $dao->getById('$id');


$dao = new VagaDAO();
$empresa = $dao->getUsuario('$id', '$nome');


/*$dao = new Usuariodao();
$usuario = $dao->getById('$id');
*/



?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="../assets/css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

<header class="main-header">

    <nav class="main-header-content">

        <div class="logo">
            <a href="../view/home.php">
                <img src="../assets/img/Tech%20(1).svg" alt="" width="200px" height="100px">
            </a>
        </div>


        <nav class="menu">


            <ul>
                <li class="item-menu">
                    <a href="../view/home.php">
                        <span class="icon"><i class="bi bi-house-door"></i></span>
                        <span class="txt-link">Home</span>
                    </a>
                </li>
                <li class="item-menu">
                    <a href="../view/blog.php">
                        <span class="icon"><i class="bi bi-columns"></i></span>
                        <span class="txt-link">Blog</span>
                    </a>
                </li>

                <!--Colocar condição de acesso à configuração.
Se for um candidato, ele pode alterar dados sendo um perfil candidato.
Se for um empresa, ele pode alterar dados sendo um perfil empresa. -->

                <li class="item-menu">
                    <a href="../usuarios/administrador/index.php ">
                        <span class="icon"><i class="bi bi-person"></i></span>
                        <span class="txt-link">Perfil</span>
                    </a>
                </li>
                <li class="item-menu">
                    <a href="../auth/logoff.php">
                        <span class="icon"><i class="bi bi-box-arrow-right"></i></span>
                        <span class="txt-link">Logoff</span>
                    </a>
                </li>
            </ul>
        </nav>
    </nav>
</header>
<section class="main-blog">
    <div class="main-blog-content1">
        <article>
            <div class="py-3 text-center" style="margin: 40px auto">
                <h2>Dados da vaga:</h2>
            </div>
            <div class="icon"><i class="fa fa-3x fa-angellist"></i></div>
            <div class="content" title="<?= $vaga[3] ?>">
                <?php

                $id = $vaga['usuario_id'];
                $dao1 = new UsuarioDAO();
                $usuario = $dao1->getById($id);
                ?>

                <?php echo '<strong>Empresa: </strong>' . $usuario[1]  ?><br>
                <?php echo '<strong>Vaga: </strong>' . $vaga[1] ?><br>
                <p><?php echo '<strong>Tipo: </strong> ' . $vaga[2] ?><br>
                    <?php echo '<strong>Salário: </strong> ' . $vaga[4] ?><br>
                    <?php echo '<strong>Descrição: </strong> ' . $vaga[3] ?>
                </p>
            </div>
        </article>


        <article>

            <div class="py-3 text-center" style="margin: 50px auto">
                <h2>Confirma seu e-mail e envie seu currículo: </h2>
            </div>
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="card-body font-weight-bold">
                                <form action="candidatar_save.php?id=<?=$vaga['id']?>&acao=enviar" enctype="multipart/form-data" method="POST">
                                    <div class="form-group">

                                        <label for="para">E-mail</label>

                                        <input name="para" type="email" class="form-control" id="para"
                                               placeholder="***@email.com">
                                        <?php if (isset($_GET['candidatar']) && $_GET['candidatar'] == 'erro3') { ?>
                                            <div style="color: darkred; font-size: 1.2rem"> E-mail inválido
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="arquivo">Enviar currículo</label>
                                        <input name="arquivo" type="file" class="form-control" id="arquivo">
                                    </div>


                                    <button type="submit" class="btn btn-primary btn-lg">Candidatar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </article>


    </div>
</section>