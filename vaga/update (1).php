<?php
header('Content-Type: text/html; charset=utf-8;');

require_once __DIR__ . '/../src/dao/usuariodao.php';


# recebe os valores enviados do formulário via método post.
$id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT) ?? 0;
$tipo = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_EMAIL);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_VALIDATE_INT) ?? 0;
$salario = filter_input(INPUT_POST, 'salario', FILTER_VALIDATE_INT) ?? 0;;
$cargaHoraria = filter_input(INPUT_POST, 'cargahoraria', FILTER_VALIDATE_INT) ?? 0;;
$publicacao = filter_input(INPUT_POST, 'publicacao', FILTER_VALIDATE_INT) ?? 0;;
$expiracao = filter_input(INPUT_POST, 'expiracao', FILTER_VALIDATE_INT) ?? 0;;

$dao = new UsuarioDAO();
$result = $dao->update($id, $nome, $tipo, $salario, $cargaHoraria, $descricao, $publicacao, $expiracao);


if ($result) {
    header('location: index.php?msg=Vaga atualizada com sucesso!');
} else {
    header('location: index.php?error=Não foi possível atualizar a vaga!');
}