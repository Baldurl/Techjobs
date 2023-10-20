<?php
    include_once '../src/conexao.php';

    $dbh = Conexao::getConexao();

    # usando funcionalidade nova do PHP 8 chamada null coalescing operatior
    $id = $_GET['id'] ?? 0;

    # cria o comando DELETE filtrado pelo campo id e valor = $id
    $query = "DELETE FROM escolabd.usuarios WHERE id = :id;";

    $stmt = $dbh->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $quantidadeUsuarios = $stmt->rowCount();
    $dbh = null;
    if ($quantidadeUsuarios() > 0)
    {
        header('location: index.php');
    } else {
        header('location: index.php?msg=Não foi possível excluir o usuário com ID: {$id}');    
    }