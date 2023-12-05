<?php
session_start();
require_once __DIR__ . '/../../src/dao/usuariodao.php';
require_once __DIR__ . '/../../auth/permissoes.php';


$dao = new UsuarioDAO();
$result = $dao->deleteById($id);



if ($result) {
    session_destroy();
    header('location: ../../view/index.php?msg=usuario-delete');
} else {
    header('location: index.php?msg=usuario-error-delete');
}