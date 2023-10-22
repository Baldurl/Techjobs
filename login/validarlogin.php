<?php
session_start(); //inicializando a sessão
require_once __DIR__ . '/../src/database/conexao.php';
require_once __DIR__ . '/../src/dao/usuariodao.php';


$dao = new Usuariodao();
$usuario = $dao->validarLogin('$email', '$senha');


if (!$usuario) {

    header("location:login.php?login=erro");
    exit;
//redireciona para a pagina login.php para preencher os dados
} else {
    //senão significa que o usuario foi encontrado
    $_SESSION['usuario'] = array(
        'id' => $usuario['id'],
        'nome' => $usuario['nome'],
        'email' => $usuario['email'],
        'perfil' => $usuario['perfil_id'],
    );

    header('Location: index.php?login=sucesso');
}



