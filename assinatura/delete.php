<?php
require_once __DIR__ . '/../../src/dao/usuariodao.php';

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT) ?? 0;

$dao = new AssinaturaDAO();
$result = $dao->delete($id);

if ($result > 0) {
    header('location: index.php?msg=Assinatura excluída com sucesso!');
} else {
    header('location: index.php?error=Não foi possível excluir assinatura!');
}