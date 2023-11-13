<?php
require_once __DIR__ . '/../src/database/conexao.php';
require_once __DIR__ . '/../src/dao/usuariodao.php';

$id = $_SESSION['usuario']['id'];
$dao = new UsuarioDAO();
$usuario = $dao->getById($id);


$perfil_id = $_SESSION['usuario']['perfil'];
$dao = new UsuarioDAO();
$perfil = $dao->getByPerfilId('perfil_id');

