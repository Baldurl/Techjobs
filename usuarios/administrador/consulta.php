<?php


include_once __DIR__ . '/../../src/database/conexao.php';
include_once __DIR__ . '/../../src/dao/usuariodao.php';
include_once __DIR__ . '/../../src/dao/perfildao.php';

$dao = new Usuariodao();
$usuarios = $dao->getAll();
$quantidadeRegistros = count($usuarios);
?>


<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
          content="ie=edge">
    <link rel="stylesheet" href="../../assets/css/table.css">
    <link rel="stylesheet" href="../../assets/css/button.css">
    <title>Consulta de usuários</title>
</head>
<body>


</body>
</html>
