<?php
session_start();
require_once __DIR__ . '/../src/database/conexao.php';
require_once __DIR__ . '/../src/dao/avaliacaodao.php';


$dao = new AvaliacaoDAO();
$resultado = $dao->insert('$nome', '$feedback', '$usuario_id', 'vaga_id');

if ($resultado) {

    header('location: candidatar.php?avaliar=sucesso');

} else {
    header('location: index.php?avaliar=erro');
}

