<?php


require_once '../src/conexao.php';
$razao_social = $_POST['razao_social'];
$email = $_POST['email'];




$dbh = Conexao::getConexao();

$query = "INSERT INTO usuario (razao_social, email) 
            VALUES ( :razao_social, :email  );";


$stmt = $dbh->prepare($query);
$stmt->bindParam(':razao_social', $razao_social);
$stmt->bindParam(':email', $email);
$result = $stmt->execute();

print_r($result);



$dbh = null;
