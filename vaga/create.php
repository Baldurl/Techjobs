<?php
require_once __DIR__ . "/../layouts/header.php";
require_once __DIR__ . "/../layouts/nav.php";
require_once __DIR__ . "/../layouts/footer.php";


session_start();
require_once __DIR__ . '/../../src/database/conexao.php';



$dao = new Vagadao();
$vaga = $dao->insert('$nome', '$tipo', '$cargo', '$salario', '$cargahoraria', '$publicacao', '$expiracao');


if ($usuario) {

    header('location: ../../login/login.php?cadastro=sucesso');

} else {
    header('location: ../opçõesCadastro.php?cadastro=erro');
}






