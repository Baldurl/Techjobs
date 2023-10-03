<?php

$login = $_POST['login'];
$senha = $_POST['senha'];

$dbh = Conexao::getConexao();

$query = " INSERT INTO PERFIL escoladb.perfis (login, senha) 
            VALUES ( $login  );";

$result = $dbh->exec($query);