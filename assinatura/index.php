<?php
session_start();
require_once __DIR__ . '/../../src/dao/usuariodao.php';
require_once __DIR__ . '/../../src/dao/perfildao.php';
$dao = new AssinaturaDAO();
$assinaturas = $dao->getAll();
$quantidadeRegistros = count($assinaturas);

?>
<link rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous">
<meta charset="UTF-8">
<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="../../assets/css/button.css" rel="stylesheet">
<link href="../../assets/css/style.css" rel="stylesheet">
<link href="../../assets/css/usuario.css" rel="stylesheet">

<!--CSS E JAVA SCRIPT TABLE LINK-->
<link href=" https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>





<header class="main-header">

    <nav class="main-header-content">

        <div class="logo">
            <a href="../../auth/home.php">TechJobs</a>
        </div>


        <nav class="menu">


            <ul>
                <li class="item-menu">
                    <a href="../../auth/home.php">
                        <span class="icon"><i class="bi bi-house-door"></i></span>
                        <span class="txt-link">Home</span>
                    </a>
                </li>
                <li class="item-menu">
                    <a href="#">
                        <span class="icon"><i class="bi bi-columns"></i></span>
                        <span class="txt-link">Dashboard</span>
                    </a>
                </li>

                <!--Colocar condição de acesso à configuração.
                 Se for um candidato, ele pode alterar dados sendo um perfil candidato.
                 Se for um empresa, ele pode alterar dados sendo um perfil empresa. -->

                <li class="item-menu">
                    <a href="index.php ">
                        <span class="icon"><i class="bi bi-person"></i></span>
                        <span class="txt-link">Perfil</span>
                    </a>
                </li>
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
        <header class="card-information-header">
            <h2>Consulta de Assinaturas</h2>
        </header>
        <section class="section__btn">
            <a class="btn-blue" href="create.php">Nova assinatura</a>
            <a class="btn" href="../../vaga/index.php">Consultar vagas</a>
        </section>

        <hr>

        <div class="container">

            <div class="row text ">

                <div class="col-md-12">

                    <div class="card-body font-weight-bold card-information-main">


                        <div class="card-information-box">

                            <!--INFORMAÇÕES DA CONTA DO USUÁRIO-->

                            <section>

                                <table id="example" class="display" style="width:100%">

                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nome</th>
                                        <th>E-mail</th>
                                        <th>Perfil</th>
                                        <th>Ação</th>
                                    </tr>
                                    </thead>


                                    <tbody>

                                    <!--TESTANDO CONDIÇÃO PARA EXIBIR O NOME EM ORDEM ALFABÉTICA NA CONSULTA DE USUÁRIOS-->
                                    <?php /*if (isset($_GET['asc']) && $_GET['asc'] == "nome"):
                                            $daoASC = new UsuarioDAO();
                                            $usuarios = $daoASC->nomeAsc();
                                            $quantidadeRegistros = count($usuarios);*/ ?>
                                    <!--FIM DA CONDIÇÃO-->


                                    <?php if ($quantidadeRegistros == "0") : ?>
                                        <tr>
                                            <td colspan="4">Não existem usuários cadastrados.</td>
                                        </tr>
                                    <?php else : ?>

                                        <?php foreach ($assinaturas as $assinatura):


                                            $id = $assinatura['perfil_id'];
                                            $dao1 = new AssinaturaDAO();
                                            $perfil = $dao1->getById($id);
                                            ?>


                                            <tr>

                                                <td><?php echo $assinatura['id']; ?></td>
                                                <td><?= htmlspecialchars($assinatura['tipo']); ?></td>
                                                <td><?= htmlspecialchars($assinatura['data']); ?></td>
                                                <td><?= htmlspecialchars($assinatura['valor']); ?></td>
                                                <td class="td__operacao">
                                                    <a class="btnalterar"
                                                       href="edit.php?id=<?= $assinatura['id']; ?>">Alterar</a>
                                                    <a class="btnexcluir"
                                                       href="delete.php?id=<?= $assinatura['id']; ?>"
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

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script>
    new DataTable('#example', {
        order: [[3, 'desc']]
    });
</script>