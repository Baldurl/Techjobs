<?php
session_start();
header('Content-Type: text/html; charset=utf-8;');
require_once __DIR__ . '/../../src/database/conexao.php';
require_once __DIR__ . '/../../src/dao/usuariodao.php';
require_once __DIR__ . '/../../auth/permissoes.php';

# recebe os valores enviados do formulário via método post.




$dao = new UsuarioDAO();
$result = $dao->updateById($id, '$nome', '$senha');


if ($result && !empty($_POST['nome']) || !empty($_POST['senha'])) {
    header('location: index.php?msg=sucesso');
} else {
    header('location: index.php?msg=erro');
}



/*if ($usuario && !empty($_POST['nome']) || !empty($_POST['senha'])
    && $_POST['nome'] != $_SESSION['usuario']['nome'] || $_POST['senha'] != $_SESSION['usuario']['senha']) {
    header('location: home.php?msg=sucesso');

} else if ($usuario && empty($_POST['nome']) || empty($_POST['senha'])) {
    header('location: edit.php?msg=erro');

} else if ($usuario && $_POST['nome'] == $_SESSION['usuario']['nome'] && $_POST['senha'] == $_SESSION['usuario']['senha']) {
    header('location: home.php?msg=erro2');
}*/

