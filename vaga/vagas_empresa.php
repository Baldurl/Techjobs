<?php
require_once __DIR__ . '/../src/dao/vagadao.php';
require_once __DIR__ . '/../layouts/headerlogin.php';

$usuario_id = $id;
$dao = new VagaDAO();
$vagas = $dao->getByUsuarioId($usuario_id);
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<meta charset="UTF-8">
<meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="../assets/css/button.css" rel="stylesheet">
<link href="../assets/css/style.css" rel="stylesheet">
<link href="../assets/css/usuario.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<link href=" https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />


<main class="main-blog">

    <?php if (isset($_GET['delete']) && $_GET['delete'] == 'sucesso') { ?>
        <div class="update-confirmation-success">
            <div class="update-confirmation-header">
                <h2>Vaga excluída com sucesso</h2>
            </div>
        </div>
    <?php } else if (isset($_GET['delete']) && $_GET['delete'] == 'erro') { ?>

            <div class="update-confirmation-error">

                <div class="update-confirmation-header">
                    <h2>Erro ao excluir vaga</h2>
                </div>

        <?php } ?>


        <?php if (isset($_GET['msg']) && $_GET['msg'] == 'sucesso') { ?>
            <div class="update-confirmation-success">
                <div class="update-confirmation-header">
                    <h2>Vaga criada com sucesso</h2>
                </div>
            </div>
        <?php } else if (isset($_GET['msg']) && $_GET['msg'] == 'erro') { ?>

                <div class="update-confirmation-error">

                    <div class="update-confirmation-header">
                        <h2>Erro ao criar vaga</h2>
                    </div>

            <?php } ?>

        </div>
        <div class="card-vaga">
            <header>
                <h2>Suas vagas ficam aqui!</h2>
            </header>
            <section class="section__btn">
                <a class="btn-orange" href="create.php">Publicar nova vaga</a>

            </section>

            <hr>

            <div class="container">

                <div class="row text ">

                    <div class="col-md-12">

                        <div class="card-body card-vaga-main">


                            <div class="card-vaga-box">
                                <!--INFORMAÇÕES DAS VAGAS DA EMPRESA-->
                                <div class="main-blog-content">
                                    <?php
                                    foreach ($vagas

                                    as $vaga) { ?>
                                    <article>
                                        <div class="content" title="<?= $vaga['descricao'] ?>">
                                            <?php echo '<strong>Vaga: </strong>' . $vaga['nome'] ?><br>
                                            <p>
                                                <?php echo '<strong>Tipo: </strong> ' . $vaga['tipo'] ?><br>
                                                <?php echo '<strong>Salário: </strong> ' . $vaga['salario'] ?><br>
                                                <?php echo '<strong>Data de publicação: </strong> ' . date('d/m/Y',  strtotime(($vaga['data_publicacao']))); ?><br>
                                                <?php echo '<strong>Data de expiração: </strong> ' . date('d/m/Y',  strtotime(($vaga['data_expiracao']))); ?><br>
                                                <?php echo '<strong>Descrição: [...]</strong> '; ?>


                                            </p>
                                            <span>
                                                <a href="../vaga/candidatar.php?id=<?= $vaga['id'] ?>">

                                                    <button type="submit" class="btn-orange">Ver detalhes</button>

                                                </a>
                                            </span>
                                        </div>
                                    </article>
                                    <?php } ?>

                                </div>




                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</main>
<script src=" https://code.jquery.com/jquery-3.7.0.js"></script>
<script src=" https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script>
    new DataTable('#example', {
        order: [[3, 'desc']]
    });
</script>