<?php
header('Content-Type: text/html; charset=utf-8;');
require_once __DIR__ . '/../src/database/conexao.php';
require_once __DIR__ . '/../src/dao/assinaturadao.php';





$dao = new AssinaturaDAO();
$result = $dao->update('$data', '$tipo', '$valor');


if ($result) {
    header('location: index.php?msg=Assinatura atualizada com sucesso!');
} else {
    header('location: index.php?error=Não foi possível atualizar assinatura!');
}