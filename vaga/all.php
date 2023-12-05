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
        <?php echo '<strong>Empresa: </strong>' . ucfirst($usuario[1]) ?><br>
        <div class="content" title="<?= $vaga['descricao'] ?>">
            <?php echo '<strong>Vaga: </strong>' . substr(ucfirst($vaga['nome']), 0, 34); ?>[...]<br>
            <p><?php echo '<strong>Tipo: </strong> ' . ucfirst($vaga['tipo']) ?><br>
                <?php echo '<strong>Salário: </strong> ' . $vaga['salario'] ?><br>
                <?php echo '<strong>Data de publicação: </strong> ' . date('d/m/Y',  strtotime(($vaga['data_publicacao']))); ?><br>

                <?php echo '<strong>Data de expiração: </strong> ' . date('d/m/Y',  strtotime(($vaga['data_expiracao']))); ?><br>
                <?php echo '<strong>Descrição: [...]</strong> '; ?>



            </p>
            <span>
               <a href="../vaga/candidatar.php?id=<?= $vaga['id'] ?>">
                    <button type="submit" class="btn-orange">Ver detalhes
                    </button>
               </a>
               <a href="../vaga/avaliar.php?id=<?= $vaga['id'] ?>">
                    <button type="submit" class="btn">Avaliar vaga
                    </button>
               </a>
            </span>
        </div>
    </article>

<?php } ?>





