<?php


include_once __DIR__ . '/../database/conexao.php';


class  AssinaturaDAO
{
    private $dbh;

    public function __construct()
    {
        $this->dbh = Conexao::getConexao();
    }

    public function getAll()
    {
        $query = "SELECT * FROM assinatura";
        $stmt = $this->dbh->query($query);
        $rows = $stmt->fetchAll();
        $this->dbh = null;
        return $rows;
    }

    public function getById(int $id)
    {
        $query = "SELECT * FROM assinatura WHERE id = :id";
        $stmt = $this->dbh->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $stmt->fetch();
        $row = $stmt->fetch(PDO::FETCH_BOTH);
        return $row;

        $this->dbh = null;
    }

    public function insert(string $nome)
    {
        $query = "insert into assinatura (nome) values (:nome)";
        $stmt = $this->dbh->prepare($query);
        $stmt->bindParam(":nome", $nome);
        $result = $stmt->execute();
        $this->dbh = null;

        return $result;
    }


    public function update(int $id, string $nome)
    {
        $query = "update assinatura set nome = :nome where id = :id";
        $stmt = $this->dbh->prepare($query);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":id", $id);
        $result = $stmt->execute();
        $this->dbh = null;

        return $result;
    }

    public function delete(int $id)
    {
        $query = "delete from assinatura where id = :id";
        $stmt = $this->dbh->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();


        $result = $stmt->rowCount();
        $this->dbh = null;
        return $result;


    }


}



