<?php
require_once __DIR__ . '/../src/dao/vagadao.php';
require_once __DIR__ . '/../auth/validarAcesso.php';
header('Content-type: text/html; charset=utf-8');
setlocale( LC_ALL, 'pt_BR.utf-8', 'pt_BR', 'Portuguese_Brazil');

$dao = new VagaDAO();
$vagas = $dao->getAll();
$quantidadeRegistros = count($vagas);
?>

<link rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous">
<meta http-equiv="content-type" content="text/html;charset=utf-8" /> <!--Introduza esta linha no teu html-->
<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link href="../assets/css/button.css" rel="stylesheet">
<link href="../assets/css/style.css" rel="stylesheet">
<link href="../assets/css/usuario.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<link href=" https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>


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
                        <span class="txt-link">Admin</span>
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
<main class="main-vaga">

    <?php if (isset($_GET['update']) && $_GET['update'] == 'sucesso') { ?>
        <div class="update-confirmation-success">
            <div class="update-confirmation-header">
                <h2>Vaga alterada com sucesso</h2>
            </div>
        </div>
    <?php } else if (isset($_GET['update']) && $_GET['update'] == 'erro') { ?>

    <div class="update-confirmation-error">

        <div class="update-confirmation-header">
            <h2>Erro ao alterar vaga</h2>
        </div>


        <?php } ?>

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
            <h2>Consulta de vagas</h2>
        </header>
        <section class="section__btn">
            <a class="btn-blue" href="create.php">Nova vaga</a>
            <a class="btn" href="../usuarios/administrador/index.php">Consultar usuários</a>
        </section>

        <hr>

        <div class="container">

            <div class="row text ">

                <div class="col-md-12">

                    <div class="card-body font-weight-bold card-vaga-main">


                        <div class="card-vaga-box">

                            <!--INFORMAÇÕES DA CONTA DO USUÁRIO-->

                            <section>
                                <table id="example" class="display" style="width:100%;">
                                    <thead>
                                    <tr>
                                        <th>Id da vaga</th>
                                        <th>Nome da empresa</th>
                                        <th>Cargo</th>
                                        <th>Tipo</th>
                                        <th>Descrição</th>
                                        <th>Salário</th>
                                        <th>Carga horária</th>
                                        <th>Data de publicação</th>
                                        <th>Data de expiração</th>
                                        <th>Ação</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <?php if ($quantidadeRegistros == "0") : ?>
                                        <tr>
                                            <td colspan="4">Não existem usuários cadastrados.</td>
                                        </tr>
                                    <?php else : ?>
                                        <?php foreach ($vagas as $vaga) :
                                            /*$id =  $vaga['usuario_id'];
                                            $dao1 = new UsuarioDAO();
                                            $usuario = $dao1->getById($id);*/
                                            ?>
                                            <tr>






                                                <td><?php echo $vaga['id']; ?></td>
                                                <td><?php echo ucfirst($vaga['nome_usuario']); ?></td>
                                                <td><?= ($vaga['nome']); ?></td>
                                                <td><?= ($vaga['tipo']); ?></td>
                                                <td><?= substr(($vaga['descricao']), 0, 49); ?>[...]</td>
                                                <td><?= ($vaga['salario']); ?></td>
                                                <td><?= ($vaga['carga_horaria']); ?></td>
                                                <td><?= date('d/m/Y',  strtotime(($vaga['data_publicacao']))); ?></td>
                                                <td><?= date('d/m/Y',  strtotime(($vaga['data_expiracao']))); ?></td>
                                                <td class="td__operacao">
                                                    <a class="btnalterar"
                                                       href="edit.php?id=<?= $vaga['id']; ?>">Alterar</a>
                                                    <a class="btnexcluir"
                                                       href="delete.php?id=<?= $vaga['id']; ?>"
                                                       onclick="return confirm('Deseja confirmar a operação?');">Excluir</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                    </tbody>
                                </table>

                            </section>
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

