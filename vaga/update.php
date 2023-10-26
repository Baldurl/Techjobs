<?php
header('Content-Type: text/html; charset=utf-8;');
require_once __DIR__ . '/../src/database/conexao.php';
require_once __DIR__ . '/../src/dao/vagadao.php';





$dao = new VagaDAO();
$result = $dao->update('$id', '$nome', '$tipo', '$desc', '$salario', '$cargaHoraria', '$dataPub', '$dataExp');


if ($result) {
    header('location: index.php?msg=sucesso!');
} else {
    header('location: index.php?error=Não foi possível atualizar a vaga!');
}