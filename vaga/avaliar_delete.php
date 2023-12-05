<?php
require_once __DIR__ . '/../src/dao/avaliacaodao.php';
require_once __DIR__ . '/../src/dao/vagadao.php';


$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT) ?? 0;
$dao = new AvaliacaoDAO();
$result = $dao->delete($id);

$vaga_id = filter_input(INPUT_GET, 'vaga_id', FILTER_SANITIZE_SPECIAL_CHARS);
$dao = new VagaDAO();
$vaga = $dao->getById($vaga_id);

if ($result > 0) {
    header("location: ../vaga/candidatar.php?id=" . $vaga_id . "&avaliardelete=sucesso");
} else {
    header("location: ../vaga/candidatar.php?id=avaliardelete=erro");
}