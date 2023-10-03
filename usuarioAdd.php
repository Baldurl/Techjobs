<?php


require_once 'Conexao.php';
$email = $_POST['email'];
$senha = $_POST['senha'];


try {

    $dbh = Conexao::getConexao();

    $query = "INSERT INTO PERFIL escoladb.usuarios (email, senha) 
            VALUES (  $email, $senha  );";


    $result = $dbh->exec($query);

    print_r($result);


} catch (PDOException $e) {
    echo $e->getMessage();
}
$dbh = null;