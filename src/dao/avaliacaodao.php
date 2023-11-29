<?php

include_once __DIR__ . '/../database/conexao.php';

class  AvaliacaoDAO
{
    private $dbh;

    public function __construct()
    {
        $this->dbh = Conexao::getConexao();
    }

    public function getAll()
    {

        $query = "SELECT * FROM avaliacao";
        $stmt = $this->dbh->query($query);
        $rows = $stmt->fetchAll();
        $this->dbh = null;
        return $rows;

    }

    public function getById($id)
    {

        $query = "SELECT * FROM avaliacao WHERE id = :id";
        $stmt = $this->dbh->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_BOTH);

        $this->dbh = null;

        return $row;
    }

    public function insert($nome, $feedback, $usuario_id, $vaga_id)
    {

        $nome = filter_input(INPUT_POST, 'nome');
        $feedback = filter_input(INPUT_POST, 'feedback');
        $usuario_id = filter_input(INPUT_POST, 'usuario_id', FILTER_SANITIZE_NUMBER_INT);
        $vaga_id = filter_input(INPUT_POST, 'vaga_id', FILTER_SANITIZE_NUMBER_INT);


        $query = "INSERT INTO avaliacao (nome, feedback, usuario_id, vaga_id) 
            VALUES (:nome, :feedback, :usuario_id, :vaga_id);";


        $stmt = $this->dbh->prepare($query);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':feedback', $feedback);
        $stmt->bindParam(':usuario_id', $usuario_id);
        $stmt->bindParam(':vaga_id', $vaga_id);
        $result = $stmt->execute();
        $this->dbh = null;

        return $result;
    }

    public function update($nome, $feedback): int
    {
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $feedback = filter_input(INPUT_POST, 'feedback', FILTER_SANITIZE_EMAIL);
        $query = "UPDATE avaliacao SET nome = :nome, feedback = :feedback WHERE id = :id";
        $stmt = $this->dbh->prepare($query);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":feedback", $feedback);
        $result = $stmt->execute();
        $this->dbh = null;

        return $result;


    }



    public function delete( $id)
    {

        $query = "DELETE FROM avaliacao WHERE id = :id";
        $stmt = $this->dbh->prepare($query);
        $stmt->bindParam(":id", $id);

        $result = $stmt->execute();
        $result = $stmt->rowcount();

        $this->dbh = null;
        return $result;
    }





 

}



