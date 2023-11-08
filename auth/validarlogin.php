<?php
session_start(); //inicializando a sessão
require_once __DIR__ . '/../src/database/conexao.php';
require_once __DIR__ . '/../src/dao/usuariodao.php';


$dao = new UsuarioDAO();
$usuario = $dao->validarLogin('$email', '$senha');


if (!$usuario) {

    header("location:index.php?auth=erro");
    exit;
//redireciona para a pagina index.php para preencher os dados
} else {
    //senão significa que o usuario foi encontrado
    $_SESSION['usuario'] = array(
        'id' => $usuario['id'],
        'nome' => $usuario['nome'],
        'email' => $usuario['email'],
        'perfil' => $usuario['perfil_id'],
    );

    header('Location: ../view/home.php?auth=sucesso');
}






