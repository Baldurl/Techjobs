<?php
session_start();
require_once __DIR__ . '/../layouts/headerLogin.php';
require_once __DIR__ . '/../src/dao/usuario_has_vagadao.php';
require_once __DIR__ . '/../src/dao/vagadao.php';
// require_once __DIR__ . '/processa_envio.php';

$usuario_id  = $_SESSION['usuario']['id'];

$dao = new UsuarioDAO();
$usuario = $dao->getById($usuario_id);


$vaga_id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
$dao = new VagaDAO();
$vaga = $dao->getById($vaga_id);



try {
    $dao = new Usuario_has_vagaDAO();
    $candidatado = $dao->candidatar($usuario_id, $vaga_id);
    header ('location: ../view/home');
    
} catch(\PDOException $e) {
    echo 'Usuario ja participa dessa seleção';
    
    ?>  
    
    <a href="../view/home.php">
<button type="button" class="btn btn-primary btn-lg ">
    Voltar
</button>
    </a>
    <?php } ?>








