<?php
require_once __DIR__ . '/../src/dao/vagadao.php';
require_once __DIR__ . '/../src/dao/usuariodao.php';


$dao = new VagaDAO();
$vagas = $dao->getAll();
$quantidadeRegistros = count($vagas);

if (!count($vagas)) {

    return null;
}

foreach ($vagas

         as $vaga) { ?>

    <?php

    $id = $vaga['usuario_id'];
    $dao = new UsuarioDAO();
    $usuario = $dao->getById($id);
    ?>


    <article>
        <div class="icon"><i class="fa fa-3x fa-angellist"></i></div>
        <?php echo '<strong>Empresa: </strong>' . $usuario[1] ?><br>
        <div class="content" title="<?= $vaga['descricao'] ?>">
            <?php echo '<strong>Vaga: </strong>' . $vaga['nome'] ?><br>
            <p><?php echo '<strong>Tipo: </strong> ' . $vaga['tipo'] ?><br>
                <?php echo '<strong>Salário: </strong> ' . $vaga['salario'] ?><br>
                <?php echo '<strong>Descrição: ...</strong> '; ?>


            </p>
            <span>
               <a href="../vaga/candidatar.php?id=<?= $vaga['id'] ?>">

                    <button type="submit"
                            class="btn-orange">Ver detalhes</button>

               </a>
            </span>
        </div>
    </article>

<?php } ?>





