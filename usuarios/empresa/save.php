<?php
header('Content-Type text/html; charset=utf-8;');
require_once __DIR__ . '/../../src/database/conexao.php';
require_once __DIR__ . '/../../src/dao/usuariodao.php';


$dao = new UsuarioDAO();
$usuario = $dao->insert('$nome', '$razao_social', '$cpf', '$cnpj', '$senha', '$email', '$sexo', '$ddi', '$ddd', '$telefone', '$cep', '$cidade', '$logradouro', '$bairro', '$rua', '$complemento', '$perfil');


if ($usuario) {
    echo 'Usuário cadastrado com sucesso';
    header('location: ../../auth/index.php?empresa=sucesso');
} else {
    echo 'Erro ao cadastrar usuário';
    header('location: create.php?empresa=erro');
}


