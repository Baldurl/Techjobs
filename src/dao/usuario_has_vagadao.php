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



    public function getInformation ($vaga_id, $usuario_id)
    {
        $query = "SELECT * 
        /* usuario_has_vaga.usuario_id as usuario_candidatado,   usuario candidatado */
        /* usuario_has_vaga.vaga_id,  id da vaga */
        /* vaga.usuario_id as usuario_empresa  empresa que publicou a vaga */

         FROM usuario_has_vaga
         WHERE vaga_id = :vaga_id and usuario_id = :usuario_id
         INNER JOIN usuario ON usuario_has_vaga.usuario_id = usuario.id 
         INNER JOIN vaga ON usuario_has_vaga.vaga_id = vaga.id";
                 $stmt = $this->dbh->prepare($query);
                 $stmt->bindParam(":vaga_id", $vaga_id);
                 $stmt->bindParam(":usuario_id", $usuario_id);
                 $stmt->execute();
                 $row = $stmt->fetch(PDO::FETCH_BOTH);
         
                 $this->dbh = null;
         
                 return $row;



    }
}



