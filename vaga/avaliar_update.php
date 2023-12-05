<?php
header('Content-Type: text/html; charset=utf-8;');
require_once __DIR__ . '/../src/database/conexao.php';
require_once __DIR__ . '/../src/dao/avaliacaodao.php';
require_once __DIR__ . '/../src/dao/vagadao.php';


$vaga_id = filter_input(INPUT_GET, 'vaga_id', FILTER_SANITIZE_SPECIAL_CHARS);
$dao = new VagaDAO();
$vaga = $dao->getById($vaga_id);

$dao = new AvaliacaoDAO();
$result = $dao->update('$id','$nome', '$feedback');


if ($result) {
    header("location: candidatar.php?id=".$vaga_id."&avaliarupdate=sucesso");
} else {
    header("location: candidatar.php?id=".$vaga_id."&avaliarupdate=erro");
}