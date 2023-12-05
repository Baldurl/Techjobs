<?php
require_once __DIR__ . '/../src/database/conexao.php';
require_once __DIR__ . '/../src/dao/vagadao.php';





$dao = new VagaDAO();
$result = $dao->update('$id', '$nome', '$tipo', '$descricao', '$salario', '$carga_horaria', '$data_publicacao', '$data_expiracao');


if ($result) {
    header('location: index.php?update=sucesso');
} else {
    header('location: index.php?update=erro');
}