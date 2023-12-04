<?php
session_start();
require_once __DIR__ . '/../src/database/conexao.php';
require_once __DIR__ . '/../src/dao/avaliacaodao.php';
require_once __DIR__ . '/../src/dao/usuariodao.php';
require_once __DIR__ . '/../src/dao/vagadao.php';


$vaga_id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
$dao = new VagaDAO();
$vaga = $dao->getById($vaga_id);


try {
    $dao = new AvaliacaoDAO();
    $resultado = $dao->insert('$nome', '$feedback', '$usuario_id', $vaga_id);
    header ('location: ../vaga/candidatar.php?id='.$vaga_id.'&avaliar=sucesso');

} catch(\PDOException $e) {
    header('location: ../vaga/candidatar.php?id=' . $vaga_id . '&avaliar=erro2');
}


