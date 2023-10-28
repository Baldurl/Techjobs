<?php
header('Content-Type: text/html; charset=utf-8;');
require_once __DIR__ . '/../../src/database/conexao.php';
require_once __DIR__ . '/../../src/dao/usuariodao.php';





$dao = new UsuarioDAO();
$result = $dao->update('$id', '$nome', '$email', '$senha', '$perfil');


if ($result) {
    header('location: index.php?msg=Usuário atualizado com sucesso!');
} else {
    header('location: index.php?error=Não foi possível atualizar o usuário!');
}