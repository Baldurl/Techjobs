<?php


include_once __DIR__ . '/../database/conexao.php';


class  Usuario_has_vagaDAO
{
    private $dbh;

    public function __construct()
    {
        $this->dbh = Conexao::getConexao();
    }




    public function candidatar($vaga_id)
    {
        $vaga_id = filter_input(INPUT_GET, 'vaga_id', FILTER_SANITIZE_SPECIAL_CHARS);
        $query = "INSERT INTO usuario_has_vaga (vaga_id) VALUES (:vaga_id)";
        $stmt = $this->dbh->prepare($query);
        $stmt->bindParam(":vaga_id", $vaga_id);
        $result = $stmt->execute();

        $this->dbh = null;

        return $result;
    }

    public function publicar($vaga)
    {
        $vaga = filter_input(INPUT_POST, 'vaga', FILTER_SANITIZE_SPECIAL_CHARS);
        $query = "INSERT INTO usuario_has_vaga (vaga_id) VALUES (:vaga_id)";
        $stmt = $this->dbh->prepare($query);
        $stmt->bindParam(":vaga_id", $vaga);
        $result = $stmt->execute();

        $this->dbh = null;

        return $result;
    }


}



