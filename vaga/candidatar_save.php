<?php
session_start();
require_once __DIR__ . '/../layouts/headerLogin.php';
require_once __DIR__ . '/../src/dao/usuario_has_vagadao.php';
require_once __DIR__ . '/processa_envio.php';

$id = $_SESSION['usuario']['id'];
$dao = new UsuarioDAO();
$usuario = $dao->getById('$id');


$vaga_id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
$dao = new VagaDAO();
$vaga = $dao->getById('$id');


$usuario_id = $id;
$dao = new Usuario_has_vagaDAO();
$candidatado = $dao->candidatar($usuario_id, $vaga_id);

/*if ($candidatado) {
    header ('Location: candidatar.php?candidatado=sucesso');

} else {
    header ('Location: candidatar.php?candidatado=erro');

}*/



