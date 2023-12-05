<?php


include_once __DIR__ . '/../database/conexao.php';


class  Usuario_has_vagaDAO
{
    private $dbh;

    public function __construct()
    {
        $this->dbh = Conexao::getConexao();
    }


    public function candidatar(int $usuario_id, int $vaga_id)
    {

        $query = "INSERT INTO usuario_has_vaga (vaga_id, usuario_id)VALUES (:vaga_id, :usuario_id)";
        $stmt = $this->dbh->prepare($query);
        $stmt->bindParam(":vaga_id", $vaga_id);
        $stmt->bindParam(":usuario_id", $usuario_id);
        $result = $stmt->execute();

        $this->dbh = null;

        return $result;
    }


    public function getAllUsuarios( $usuario_id,  int $vaga_id)
    {


        $query = "SELECT distinct(usuario_id) as usuario_candidatado, nome, curriculo, email, vaga_id
                     FROM usuario_has_vaga
                         INNER JOIN usuario ON usuario_has_vaga.usuario_id = usuario.id 
                             WHERE   vaga_id = :vaga_id";
        $stmt = $this->dbh->prepare($query);
        $stmt->bindParam(":vaga_id", $vaga_id);
        $stmt->execute();
        $rows = $stmt->fetchAll();
        $this->dbh = null;
        return $rows;


    }


    public function enviarCurriculo( $curriculo)
    {

        $query = "UPDATE usuario_has_vaga  
                        SET usuario_has_vaga.curriculo = usuario.curriculo
                            FROM usuario_has_vaga
                            INNER JOIN usuario 
                                ON usuario_has_vaga.usuario_id = usuario.id";
        $stmt = $this->dbh->prepare($query);

        $stmt->bindParam(":curriculo", $curriculo);
        $stmt->bindParam(":vaga_id", $vaga_id);
        $stmt->bindParam(":usuario_id", $usuario_id);
        $result = $stmt->execute();

        $this->dbh = null;

        return $result;
    }





/*    public function getById(int $id)
    {
        $query = "SELECT * FROM usuario_has_vaga 
         INNER JOIN usuario  on usuario_has_vaga.usuario_id = usuario.id
         WHERE usuario_id = :usuario_id";
        $stmt = $this->dbh->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_BOTH);

        $this->dbh = null;

        return $row;
        }*/
}



