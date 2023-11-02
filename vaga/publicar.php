<?php

require_once __DIR__ . '/../layouts/headerLogin.php ';
require_once __DIR__ . '/../src/dao/usuario_has_vagadao.php ';


$dao = new Usuario_has_vagaDAO();
$usuario = $dao->publicar('$vaga');

if ($usuario) {

    echo 'Vaga publicada com sucesso';
} else {

    echo 'Erro ao publicar';
}

