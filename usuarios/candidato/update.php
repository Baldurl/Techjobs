<?php



require_once '../../src/conexao.php';
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$id = NULL;
$perfil = 'candidato';







$query = "INSERT INTO perfil(id, nome) 
            VALUES(:id, :nome);";
$stmt = $dbh->prepare($query);
$stmt->bindParam(':id', $id);
$stmt->bindParam(':nome', $perfil);
$result = $stmt->execute();


if ($result) {
    echo 'candidato cadastrado com sucesso. </br>';
    echo '<a href="../../login/login.php">Fazer login</a></br>';
} else {
    echo 'Erro ao cadastrar perfil';
}


$dbh = null;
