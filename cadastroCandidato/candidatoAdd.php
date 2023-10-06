<?php


require_once '../src/conexao.php';
$email = $_POST['email'];
$senha = $_POST['senha'];



$dbh = Conexao::getConexao();

$query = "INSERT INTO PERFIL escoladb.usuarios (email, senha) 
            VALUES (  $email, $senha  );";


$result = $dbh->exec($query);

print_r($result);



$dbh = null;
