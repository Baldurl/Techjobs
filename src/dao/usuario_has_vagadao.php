<?php


include_once __DIR__ . '/../database/conexao.php';


class  Usuario_has_vagaDAO
{
    private $dbh;

    public function __construct()
    {
        $this->dbh = Conexao::getConexao();
    }




    public function candidatar( int $usuario_id, int $vaga_id)
    {

        $query = "INSERT INTO usuario_has_vaga (vaga_id, usuario_id)VALUES (:vaga_id, :usuario_id)";
        $stmt = $this->dbh->prepare($query);
        $stmt->bindParam(":vaga_id", $vaga_id);
        $stmt->bindParam(":usuario_id", $usuario_id);
        $result = $stmt->execute();

        $this->dbh = null;

        return $result;
    }

    public function publicar($vaga_id)
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



