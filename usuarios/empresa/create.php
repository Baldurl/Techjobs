<?php
header('Content-Type text/html; charset=utf-8;');
require_once __DIR__ . '/../../src/database/conexao.php';
require_once __DIR__ . '/../../src/dao/usuariodao.php';


$dao = new Usuariodao();
$usuario = $dao->insert('$nome', '$razao_social', '$cpf', '$cnpj', '$senha', '$email', '$sexo', '$ddi', '$ddd', '$telefone', '$cep', '$cidade', '$logradouro', '$bairro', '$rua', '$complemento');


if ($usuario) {
    echo 'empresa cadastrada com sucesso';
    header('location: ../../login/opçõesCadastro.php');
} else {
    echo 'Erro ao cadastrar empresa';
    header('location: opçõesCadastro.php?msg=erro');
}


