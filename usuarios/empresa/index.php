<?php
require_once __DIR__ . '/../../layouts/header.php';
require_once __DIR__ . '/../../src/database/conexao.php';
require_once __DIR__ . '/../../src/dao/usuariodao.php';


$dao = new UsuarioDAO();
$usuario = $dao->getById();


if (!$usuario) {
    header('location: save.php?error=Empresa não encontrada!');
    exit;
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tech Jobs - Informações</title>
</head>
<body>

</body>
</html>

