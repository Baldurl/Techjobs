<?php
session_start();
header('Content-Type: text/html; charset=utf-8;');

require_once __DIR__ . '/../../layouts/header.php';
require_once __DIR__ . '/../../src/database/conexao.php';
require_once __DIR__ . '/../../src/dao/usuariodao.php';


# recebe os valores enviados do formulário via método post.

$dao = new UsuarioDAO();
$usuario = $dao->update('$id', '$nome', '$senha');


if ($usuario && !empty($_POST['nome']) || !empty($_POST['senha'])) {
    header('location: home.php?msg=sucesso');
} else {
    header('location: home.php?msg=erro');
}



/*if ($usuario && !empty($_POST['nome']) || !empty($_POST['senha'])
    && $_POST['nome'] != $_SESSION['usuario']['nome'] || $_POST['senha'] != $_SESSION['usuario']['senha']) {
    header('location: home.php?msg=sucesso');

} else if ($usuario && empty($_POST['nome']) || empty($_POST['senha'])) {
    header('location: edit.php?msg=erro');

} else if ($usuario && $_POST['nome'] == $_SESSION['usuario']['nome'] && $_POST['senha'] == $_SESSION['usuario']['senha']) {
    header('location: home.php?msg=erro2');
}*/

