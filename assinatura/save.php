<?php
session_start();
require_once __DIR__ . '/../src/database/conexao.php';
require_once __DIR__ . '/../src/dao/assinaturadao.php';


$dao = new AssinaturaDAO();
$assinatura = $dao->insert('$tipo', '$valor', '$data');


if ($assinatura) {

    header('location: index.php?assinatura=sucesso');

} else {
    header('location: index.php?assinatura=erro');
}