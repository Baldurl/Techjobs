<?php
require_once __DIR__ . '/../layouts/headerLogin.php';
require_once __DIR__ . '/../src/dao/usuario_has_vagadao.php';


$dao = new Usuario_has_vagaDAO();
$usuario = $dao->candidatar('$vaga');

if ($usuario) {

    echo 'Candidatado com sucesso';
    header('location: ../view/home.php?candidatar=sucesso');
} else {

    echo 'Erro ao candidatar';
    header('location: candidatar.php?candidatar=erro');
}


