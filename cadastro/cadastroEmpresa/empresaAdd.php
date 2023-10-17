<?php
header('Content-Type text/html; charset=utf-8;');
require_once '../../src/conexao.php';
$nome = $_POST['nome'];
$razao_social = $_POST['razao_social'];
/* $cpf = $_POST['cpf']; */
$cnpj = $_POST['cnpj'];
$senha = $_POST['senha'];
$email = $_POST['email'];
/* $sexo = $_POST['sexo']; */
$ddi = $_POST['ddi'];
$ddd = $_POST['ddd'];
$telefone = $_POST['telefone'];
$cep = $_POST['cep'];
$cidade = $_POST['cidade'];
$logradouro = $_POST['logradouro'];
$bairro = $_POST['bairro'];
$rua = $_POST['rua'];
$complemento = $_POST['complemento'];
$perfil = 'Empresa';



$dbh = Conexao::getConexao();

$query = "INSERT INTO usuario (nome, razao_social, email, cnpj, senha, ddi, 
            ddd, telefone, cep, cidade, logradouro, bairro, rua, complemento) 
            VALUES (:nome, :razao_social, :email, :cnpj, :senha, :ddi, 
            :ddd, :telefone, :cep, :cidade, :logradouro, :bairro, :rua, :complemento);";


$stmt = $dbh->prepare($query);
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':razao_social', $razao_social);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':cnpj', $cnpj);
$stmt->bindParam(':senha', $senha);
$stmt->bindParam(':ddi', $ddi);
$stmt->bindParam(':ddd', $ddd);
$stmt->bindParam(':telefone', $telefone);
$stmt->bindParam(':cep', $cep);
$stmt->bindParam(':cidade', $cidade);
$stmt->bindParam(':logradouro', $logradouro);
$stmt->bindParam(':bairro', $bairro);
$stmt->bindParam(':rua', $rua);
$stmt->bindParam(':complemento', $complemento);
$result = $stmt->execute();




$query = "INSERT INTO perfil(id, nome) 
            VALUES(:id, :nome);";
$stmt = $dbh->prepare($query);
$stmt->bindParam(':id', $id);
$stmt->bindParam(':nome', $perfil);
$result = $stmt->execute();





if ($result) {
    echo 'Empresa cadastrada com sucesso';
} else {
    echo 'Erro ao cadastrar empresa';
}



$dbh = null;
echo '<p><a href="../../index.html">Voltar</a></p>';
