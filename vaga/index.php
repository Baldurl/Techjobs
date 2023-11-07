<?php
require_once __DIR__ . '/../src/dao/vagadao.php';
require_once __DIR__ . '/../layouts/headerLogin.php';

$dao = new VagaDAO();
$vagas = $dao->getAll();
$quantidadeRegistros = count($vagas);
?>

<link rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous">
<meta charset="UTF-8">
<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="../assets/css/button.css" rel="stylesheet">
<link href="../assets/css/style.css" rel="stylesheet">
<link href="../assets/css/usuario.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<link href=" https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>




<main class="main-vaga">

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


                        <div class="card-information-box">

                            <!--INFORMAÇÕES DA CONTA DO USUÁRIO-->

                            <section>
                                <table id="example" class="display" style="width:100%;">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
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

                                            
                                                <td><?= ($vaga['nome']); ?></td>
                                                <td><?= ($vaga['tipo']); ?></td>
                                                <td><?= ($vaga['descricao']); ?></td>
                                                <td><?= ($vaga['salario']); ?></td>
                                                <td><?= ($vaga['carga_horaria']); ?></td>
                                                <td><?= ($vaga['data_publicacao']); ?></td>
                                                <td><?= ($vaga['data_expiracao']); ?></td>
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

