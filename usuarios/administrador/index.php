<?php
session_start();
require_once __DIR__ . '/../../src/dao/usuariodao.php';
require_once __DIR__ . '/../../src/dao/perfildao.php';
$dao = new UsuarioDAO();
$usuarios = $dao->getAll();
$quantidadeRegistros = count($usuarios);

?>

<meta charset="UTF-8">
<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="../../assets/css/button.css" rel="stylesheet">
<link href="../../assets/css/style.css" rel="stylesheet">
<link href="../../assets/css/usuario.css" rel="stylesheet">
<link rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
      integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous"/>
<link href="https://unpkg.com/progressive-image@1.2.0/dist/index.css" rel="stylesheet" type="text/css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">


<!--CSS E JAVA SCRIPT TABLE LINK-->
<link href=" https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>

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

                <li class="item-menu">
                    <a href="index.php ">
                        <span class="icon"><i class="bi bi-person"></i></span>
                        <span class="txt-link">Admin</span>
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

    <?php if (isset($_GET['update']) && $_GET['update'] == 'sucesso') { ?>
        <div class="update-confirmation-success">
            <div class="update-confirmation-header">
                <h2>Dados do usuário alterados com sucesso!</h2>
            </div>
        </div>
    <?php } else if (isset($_GET['update']) && $_GET['update'] == 'erro') { ?>

    <div class="update-confirmation-error">

        <div class="update-confirmation-header">
            <h2>Erro ao alterar dados do usuário!</h2>
        </div>


        <?php } ?>

            <?php if (isset($_GET['delete']) && $_GET['delete'] == 'sucesso') { ?>
        <div class="update-confirmation-success">
            <div class="update-confirmation-header">
                <h2>Usuário excluído com sucesso!</h2>
            </div>
        </div>
    <?php } else if (isset($_GET['delete']) && $_GET['delete'] == 'erro') { ?>

    <div class="update-confirmation-error">

        <div class="update-confirmation-header">
            <h2>Erro ao excluir usuário!</h2>
        </div>


        <?php } ?>


        <?php if (isset($_GET['msg']) && $_GET['msg'] == 'sucesso') { ?>
            <div class="update-confirmation-success">
                <div class="update-confirmation-header">
                    <h2>Usuário criado com sucesso</h2>
                </div>
            </div>
        <?php } else if (isset($_GET['msg']) && $_GET['msg'] == 'erro') { ?>

        <div class="update-confirmation-error">

            <div class="update-confirmation-header">
                <h2>Erro ao criar usuário</h2>
            </div>

            <?php } ?>



        </div>
    <div class="card-information">
        <header class="card-information-header">
            <h2>Consulta de usuários</h2>
        </header>
        <section class="section__btn">
            <a class="btn-blue" href="create.php">Novo usuário</a>
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

                                        <?php foreach ($usuarios as $usuario):


                                            $id = $usuario['perfil_id'];
                                            $dao1 = new PerfilDAO();
                                            $perfil = $dao1->getById($id);
                                            ?>


                                            <tr>

                                                <td><?php echo $usuario['id']; ?></td>
                                                <td><?= htmlspecialchars($usuario['nome']); ?></td>
                                                <td><?= htmlspecialchars($usuario['email']); ?></td>
                                                <td><?= htmlspecialchars($perfil['nome']); ?></td>
                                                <td class="td__operacao">
                                                    <a class="btnalterar"
                                                       href="edit.php?id=<?= $usuario['id']; ?>">Alterar</a>
                                                    <a class="btnexcluir"
                                                       href="delete.php?id=<?= $usuario['id']; ?>"
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
