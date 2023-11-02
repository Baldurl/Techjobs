<?php
require_once __DIR__ . '/../layouts/headerLogin.php';
require_once __DIR__ . '/../src/dao/vagadao.php';
require_once __DIR__ . '/../src/dao/usuariodao.php';

$dao = new VagaDAO();
$vaga = $dao->getById('$id');


$dao = new VagaDAO();
$empresa = $dao->getUsuario('$id', '$nome');




?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="../assets/css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">


<section class="main-blog">
    <div class="main-blog-content">
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
                    <?php echo '<strong>Descrição: </strong> ' .
                        substr($vaga[3], 0,
                            (strlen($vaga[3]) >= 50 ? 50 :
                                strlen($vaga[3]))) ?>
                    <!-- <a href="https://monkeytype.com/" target="_blank" rel="external">Descrição</a> -->
                </p>
            </div>
        </article>


        <article>

            <div class="py-3 text-center" style="margin: 50px auto">
                <h2>Confirmes seus dados e envie seu currículo:</h2>
            </div>
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="card-body font-weight-bold">
                                <form action="processa_envio.php?acao=enviar" enctype="multipart/form-data" method="POST">
                                    <div class="form-group">
                                        <label for="para">E-mail</label>
                                        <input name="para" type="email" class="form-control" id="para"
                                               placeholder="***@email.com">
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