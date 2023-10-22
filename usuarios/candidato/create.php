<?php
session_start();
require_once __DIR__ . '/../../src/database/conexao.php';
require_once __DIR__ . '/../../src/dao/usuariodao.php';


$dao = new UsuarioDao();
$usuario = $dao->insert('$nome', '$razao_social', '$cpf', '$cnpj', '$senha', '$email', '$sexo', '$ddi', '$ddd', '$telefone', '$cep', '$cidade', '$logradouro', '$bairro', '$rua', '$complemento', '$perfil');


if ($usuario) {
    echo 'Candidato cadastrado com sucesso. </br>';
    $_SESSION['usuario'] = array(
        'id' => $usuario['id'],
        'nome' => $usuario['nome'],
        'email' => $usuario['email'],
        'perfil' => $usuario['perfil_id'],
    );
    header('location: ../../login/index.php?cadastro=sucesso');

} else {
    header('location: ../opçõesCadastro.php?cadastro=erro');
}





