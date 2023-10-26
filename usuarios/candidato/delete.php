<?php



require_once '../../src/conexao.php';
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$id = NULL;
$perfil = 'candidato';


//$dbh = Conexao::getConexao();

$query = "INSERT INTO usuario (id, nome, senha, email) 
            VALUES (:id, :nome, :senha, :email);";


$stmt = $dbh->prepare($query);
$stmt->bindParam(':id', $id);
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':senha', $senha);
$stmt->bindParam(':email', $email);
$stmt->execute();




$query = "INSERT INTO perfil(id, nome) 
            VALUES(:id, :nome);";
$stmt = $dbh->prepare($query);
$stmt->bindParam(':id', $id);
$stmt->bindParam(':nome', $perfil);
$result = $stmt->execute();


if ($result) {
    echo 'candidato cadastrado com sucesso. </br>';
    echo '<a href="../../auth/index.php">Fazer auth</a></br>';
} else {
    echo 'Erro ao cadastrar perfil';
}


$dbh = null;
