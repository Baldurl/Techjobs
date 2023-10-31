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
       

        $this->dbh = null;

        return $row;
    }

    public function insert(string $tipo, $data, $valor)
    {


        $tipo = $_POST['tipo'];
        $data = $_POST['data'];
        $valor = $_POST['valor'];
        $query = "INSERT INTO assinatura (tipo, data, valor) VALUES (:nome, :data, :valor)";
        $stmt = $this->dbh->prepare($query);
        $stmt->bindParam(":tipo", $tipo);
        $stmt->bindParam(":data", $data);
        $stmt->bindParam(":valor", $valor);
        $result = $stmt->execute();
        $this->dbh = null;

        return $result;
    }


    public function update(string $tipo, $data, float $valor)
    {
        $query = "UPDATE assinatura SET tipo = :tipo, data = :data WHERE id = :id";
        $stmt = $this->dbh->prepare($query);
        $stmt->bindParam(":tipo", $tipo);
        $stmt->bindParam(":data", $data);
        $stmt->bindParam(":valor", $valor);
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



