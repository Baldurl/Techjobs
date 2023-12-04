<?php
require_once __DIR__ . '/../auth/validarAcesso.php';
require_once __DIR__ . '/../src/dao/vagadao.php';
require_once __DIR__ . '/../src/dao/usuariodao.php';
require_once __DIR__ . '/../src/dao/avaliacaodao.php';
require_once __DIR__ . '/../auth/permissoes.php';
require_once __DIR__ . '/../src/dao/vagadao.php';
require_once __DIR__ . '/../src/dao/usuario_has_vagadao.php';

$vaga_id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
$dao = new VagaDAO();
$vaga = $dao->getById($vaga_id);

$dao = new VagaDAO();
$empresa = $dao->getUsuario('$id', '$nome');


if (isset($_SESSION['usuario'])) {
    require_once __DIR__ . '/../layouts/headerlogin.php';
} else {
    require_once __DIR__ . '/../layouts/headerHome.php';
}


?>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/button.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

<?php if ($perfil_id == 2) { ?>
    <section class="main-blog">
        <div class="main-blog-content1">
            <article>
                <div class="py-3 text-center" style="margin: 40px auto">
                    <h2>Dados da vaga:</h2>
                </div>
                <div class="icon"><i class="fa fa-3x fa-angellist"></i></div>
                <div class="content" title="<?= $vaga[3] ?>">

                    <?php
                    $empresa_id = $vaga['usuario_id'];
                    $dao = new UsuarioDAO();
                    $usuario = $dao->getById($empresa_id);
                    ?>

                    <?php echo '<strong>Empresa: </strong>' . $usuario[1] ?><br>
                    <?php echo '<strong>Vaga: </strong>' . $vaga[1] ?><br>
                    <p>
                        <?php echo '<strong>Tipo: </strong> ' . $vaga[2] ?><br>
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
                                    <form action="candidatar_save.php?id=<?= $vaga['id'] ?>&acao=enviar"
                                          enctype="multipart/form-data" method="POST">
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
                                            <input accept="application/pdf" name="arquivo" type="file"
                                                   class="form-control" id="arquivo">
                                        </div>

                                        <?php if (isset($_GET['candidatar']) && $_GET['candidatar'] == 'erro2') { ?>
                                            <div style="color: darkred; font-size: 1.2rem"> Você já participa dessa vaga
                                            </div>
                                        <?php } ?>

                                        <?php if (isset($_GET['candidatar']) && $_GET['candidatar'] == 'sucesso') { ?>
                                            <div style="color: lightgreen; font-size: 1.2rem"> Você se candidatou nessa
                                                vaga, espere ser chamado!
                                            </div>
                                        <?php } ?>
                                        <!-- Criar condição de erro caso não for um pdf -->


                                        <div class="update-group-btns">
                                            <button type="submit" class="btn btn-primary btn-orange ">Confirmar
                                            </button>

                                            <a href="../view/home.php">
                                                <button type="button" class="btn btn-primary btn-lg ">
                                                    Voltar
                                                </button>
                                            </a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </article>

            <article>

                <div class="py-3 text-center" style="margin: 10px auto">
                    <h2>Veja as valiações dessa vaga:</h2>
                </div>
                <?php

                $dao = new AvaliacaoDAO();
                $avaliacoes = $dao->getById($vaga_id);
                $quantidadeAvaliacoes = count($avaliacoes);

                if (!count($avaliacoes)) { ?>
                    <div class="py-3 text-center" style="margin: 20px auto">
                        <h4>Ainda não temos avaliações para essa vaga, dê seu feedback</h4>
                        <a href="../vaga/avaliar.php?id=<?= $vaga['id'] ?>">
                            <button type="submit" class=" btn-orange">Avaliar
                            </button>
                        </a>
                    </div>

                    <?php return null;
                }

                foreach ($avaliacoes

                         as $avaliacao) { ?>


                    <div class="content avaliacao-content" title="<?= $avaliacao[1] ?>">

                        <strong>Usuário: </strong><?php echo ucfirst($avaliacao['nome']) ?><br>
                        <?php echo $avaliacao['titulo'] ?><br>
                        <?php echo $avaliacao['feedback'] ?><br>



                    <?php
                    if ($id == $avaliacao['usuario_id']) { ?>

                        <a class="btn" style="background-color: rgb(243, 156, 95);" href="avaliar_edit.php?id=<?= $avaliacao['avaliacao_id']; ?>">Alterar</a>
                        <a class="btn" href="avaliar_delete.php?id=<?= $avaliacao['avaliacao_id']; ?>"
                           onclick="return confirm('Deseja confirmar a operação?');">Excluir</a>


                    <?php }
                } ?>
                    </div>

                <div class="py-3 text-center" style="margin: 20px auto">
                    <h4>Dê seu feedback</h4>

                    <a href="../vaga/avaliar.php?id=<?= $vaga['id'] ?>">
                        <button type="submit" class=" btn-orange">Avaliar
                        </button>
                    </a>
                </div>

            </article>
        </div>
    </section>

<?php } else
    if ($perfil_id == 1 || 3) {
        if (($_SESSION['usuario']) != $vaga['usuario_id']) {
        }


        ?>

        <section class="main-blog">
            <div class="main-blog-content1">
                <article>
                    <div class="py-3 text-left" style="margin: 40px auto">
                        <h3>Dados da vaga: </h3>
                    </div>
                    <div class="icon"><i class="fa fa-3x fa-angellist"></i></div>
                    <div class="content" title="<?= $vaga[3] ?>">
                        <?php

                        $id = $vaga['usuario_id'];
                        $dao = new UsuarioDAO();
                        $usuario = $dao->getById($id);
                        ?>

                        <?php echo '<strong>Empresa: </strong>' . $usuario[1] ?><br>
                        <?php echo '<strong>Vaga: </strong>' . $vaga[1] ?><br>
                        <p>
                            <?php echo '<strong>Tipo: </strong> ' . $vaga[2] ?><br>
                            <?php echo '<strong>Salário: </strong> ' . $vaga[4] ?><br>
                            <?php echo '<strong>Descrição: </strong> ' . $vaga[3] ?>
                        </p>
                    </div>
                    <tr>
                        <td class="td__operacao">
                            <a class="btnalterar"
                               href="edit.php?id=<?= $vaga['id']; ?>">Alterar</a>
                            <a class="btnexcluir"
                               href="delete.php?id=<?= $vaga['id']; ?>"
                               onclick="return confirm('Deseja confirmar a operação?');">Excluir</a>
                        </td>
                    </tr>


                    <div class="py-3 text-left" style="margin: 40px auto">
                        <h3>Usuários cadastrados nessa vaga: </h3>
                    </div>
                    <section>
                        <table id="example" class="display" style="width:100%;">
                            <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Currículo</th>
                                <th>E-mail</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $dao = new Usuario_has_vagaDAO();
                            $usuarios = $dao->getAllUsuarios('$usuario_id', $vaga_id);

                            foreach ($usuarios as $usuario) {
                                echo "<tr>";
                                echo "<td>" . $usuario[1] . "</td>";
                                echo "<td>" . $usuario[2] . "</td>";
                                echo "<td>" . $usuario[3] . "</td>";
                                echo "</tr>";
                            }
                            ?>
                            </tbody>
                        </table>

                    </section>
                </article>
                <article>

                    <div class="py-3 text-center" style="margin: 10px auto">
                        <h2>Veja as valiações dessa vaga:</h2>
                    </div>
                    <?php

                    $dao = new AvaliacaoDAO();
                    $avaliacoes = $dao->getById($vaga_id);
                    $quantidadeAvaliacoes = count($avaliacoes);

                    if (!count($avaliacoes)) { ?>
                        <div class="py-3 text-center" style="margin: 20px auto">
                            <h4>Ainda não temos avaliações para essa vaga</h4>
                            <a href="../">
                                <button type="submit" class=" btn">Voltar</button>
                            </a>
                        </div>

                        <?php return null;
                    }

                    foreach ($avaliacoes

                             as $avaliacao) { ?>


                        <div class="content avaliacao-content" title="<?= $avaliacao[1] ?>">

                            <strong>Usuário: </strong><?php echo ucfirst($avaliacao['nome']) ?><br>
                            <?php echo $avaliacao['titulo'] ?><br>
                            <?php echo $avaliacao['feedback'] ?><br>
                        </div>
                        <a class="btnalterar" href="avaliar_edit.php?id=<?= $avaliacao['avaliacao_id']; ?>">Alterar</a>
                        <a class="btnexcluir" href="avaliar_delete.php?id=<?= $avaliacao['avaliacao_id']; ?>"
                           onclick="return confirm('Deseja confirmar a operação?');">Excluir</a>
                        <a href="../">
                            <button type="submit" class=" btn">Voltar</button>
                        </a>

                    <?php } ?>


                </article>


            </div>
        </section>

    <?php } ?>