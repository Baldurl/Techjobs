<?php

require_once __DIR__ . '/../src/database/conexao.php';
require_once __DIR__ . '/../src/dao/usuariodao.php';


$dao = new Usuariodao();
$usuario = $dao->validarLogin('$email', '$senha');


if (!$usuario) {

    header("location:login.php?login=erro");
    exit;
//redireciona para a pagina login/login.php para preencher os dados
} else {
    //senão significa que o usuario foi encontrado

    header('Location: index.php');
    session_start(); //inicializando a sessão
    $_SESSION["id"] = $usuario['nome'];
    $_SESSION["nome"] = $usuario['nome'];
    $_SESSION["email"] = $usuario['email'];

}



