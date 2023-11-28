<?php
header('Content-Type: text/html; charset=utf-8;');
require_once __DIR__ . '/../../src/database/conexao.php';
require_once __DIR__ . '/../../src/dao/usuariodao.php';




$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT) ?? 0;
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);
$perfil = filter_input(INPUT_POST, 'perfil', FILTER_SANITIZE_NUMBER_INT) ?? 0;
$dao = new UsuarioDAO();
$result = $dao->update('$id', '$nome', '$email', '$senha', '$perfil');


if ($result) {
    header('location: index.php?update=sucesso');
} else {
    header('location: index.php?update=erro');
}