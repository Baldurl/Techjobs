<?php
session_start();
require_once __DIR__ . '/../src/database/conexao.php';
require_once __DIR__ . '/../src/dao/vagadao.php';


$dao = new VagaDAO();
$vaga = $dao->insert('$nome', '$tipo', '$descricao', '$salario', '$carga_horaria', '$data_publicacao', '$data_expiracao', '$usuario_id');

if ($vaga) {

    header('location: index.php?cadastro=sucesso');

} else {
    header('location: index.php?cadastro=erro');
}



