<?php
header('Content-Type: text/html; charset=utf-8;');

include_once __DIR__. '/../src/dao/perfildao.php';

# recebe os valores enviados do formulário via método post.
$id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT) ?? 0;
$nome = strtoupper(filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS));

# cria um objeto da classe PerfilDAO e chama método para realizar ação.
$dao = new PerfilDAO();
$result = $dao->update($id, $nome);

if ($result) {
    header('location: index.php?msg=Empresa atualizada com sucesso!');
} else {
    header('location: index.php?error=Não foi possível atualizar a empresa!');
}