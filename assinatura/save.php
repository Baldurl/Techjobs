<?php
session_start();
require_once __DIR__ . '/../src/dao/assinaturadao.php';
$valor = $_POST['valor'] ?? 0;
$tipo = $_POST['tipo'] ?? 0;
$data = $_POST['data'] ;

var_dump($_POST); exit;
$dao = new AssinaturaDAO();
$assinatura = $dao->insert('$tipo', '$valor', '$data');


if ($assinatura) {

    header('location: index.php?assinatura=sucesso');

} else {
    header('location: index.php?assinatura=erro');
}



