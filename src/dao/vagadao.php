<?php

include_once __DIR__ . '/../database/conexao.php';


class VagaDAO
{
    private $dbh;

    public function __construct()
    {
        $this->dbh = Conexao::getConexao();
    }

    public function getAll()
    {
        $query = "SELECT vaga.id, vaga.nome, vaga.tipo, vaga.descricao, vaga.salario, vaga.carga_horaria, vaga.data_publicacao, vaga.data_expiracao, vaga.usuario_id,
       usuario.nome as nome_usuario
                        FROM vaga
                                INNER JOIN usuario 
                                    ON vaga.usuario_id = usuario.id ";
        $stmt = $this->dbh->query($query);
        $rows = $stmt->fetchAll();
        $this->dbh = null;
        return $rows;
    }

    public function getById(int $id)
    {
        $query = "SELECT * FROM vaga WHERE id = :id;";
        $stmt = $this->dbh->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_BOTH);


        $this->dbh = null;
        return $row;
    }


    public function getUsuario($id, $usuario_id)
    {
        $query = "SELECT vaga.id, vaga.usuario_id 
                FROM vaga
                INNER JOIN usuario
                ON vaga.id=usuario.nome;";
        $stmt = $this->dbh->query($query);
        $row = $stmt->fetch();
        $this->dbh = null;
        return $row;
    }

    public function getByVaga(string $nome)
    {
        $vaga = filter_input(INPUT_POST, 'vaga', FILTER_SANITIZE_SPECIAL_CHARS);
        $query = ("SELECT * FROM vaga WHERE nome LIKE '%$vaga%'");
        $stmt = $this->dbh->query($query);
        /* $stmt->bindParam(':nome', $vaga);
$stmt->execute(); */
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);


        $this->dbh = null;
        return $resultados;
    }

    public function getByUsuarioId(int $usuario_id)
    {
        $query = ("SELECT * FROM vaga WHERE usuario_id = :usuario_id");
        $stmt = $this->dbh->prepare($query);
        $stmt->bindParam(":usuario_id", $usuario_id);
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);



        $this->dbh = null;
        return $rows;


    }

    public function insert($nome, $tipo, $descricao, $salario, $carga_horaria, $data_publicacao, $data_expiracao, $usuario_id)
    {

        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $tipo = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_SPECIAL_CHARS);
        $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS);
        $salario = filter_input(INPUT_POST, 'salario', FILTER_SANITIZE_SPECIAL_CHARS);
        $carga_horaria = filter_input(INPUT_POST, 'carga_horaria', FILTER_SANITIZE_SPECIAL_CHARS);
        $data_publicacao = filter_input(INPUT_POST, 'data_publicacao', FILTER_SANITIZE_SPECIAL_CHARS);
        $data_expiracao = filter_input(INPUT_POST, 'data_expiracao', FILTER_SANITIZE_SPECIAL_CHARS);
        $usuario_id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
        $query = "INSERT INTO vaga (nome, tipo, descricao, salario, carga_horaria, data_publicacao, data_expiracao, usuario_id) 
VALUES (:nome, :tipo, :descricao, :salario, :carga_horaria, :data_publicacao, :data_expiracao, :usuario_id);";
        $stmt = $this->dbh->prepare($query);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":tipo", $tipo);
        $stmt->bindParam(":descricao", $descricao);
        $stmt->bindParam(":salario", $salario);
        $stmt->bindParam(":carga_horaria", $carga_horaria);
        $stmt->bindParam(":data_publicacao", $data_publicacao);
        $stmt->bindParam(":data_expiracao", $data_expiracao);
        $stmt->bindParam(":usuario_id", $usuario_id);

        $result = $stmt->execute();
        $this->dbh = null;

        return $result;
    }


    public function update($id, $nome, $tipo, $descricao, $salario, $carga_horaria, $data_publicacao, $data_expiracao): int
    {
        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT) ?? 0;
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $tipo = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_SPECIAL_CHARS);
        $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS);
        $salario = filter_input(INPUT_POST, 'salario', FILTER_SANITIZE_SPECIAL_CHARS);
        $carga_horaria = filter_input(INPUT_POST, 'carga_horaria', FILTER_SANITIZE_SPECIAL_CHARS);
        $data_publicacao = filter_input(INPUT_POST, 'data_publicacao', FILTER_SANITIZE_SPECIAL_CHARS);
        $data_expiracao = filter_input(INPUT_POST, 'data_expiracao', FILTER_SANITIZE_SPECIAL_CHARS);

        $query = "UPDATE vaga SET nome = :nome, tipo = :tipo, descricao = :descricao, salario = :salario,
         carga_horaria = :carga_horaria, data_publicacao = :data_publicacao,
          data_expiracao = :data_expiracao WHERE id = :id;";
        $stmt = $this->dbh->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":tipo", $tipo);
        $stmt->bindParam(":descricao", $descricao);
        $stmt->bindParam(":salario", $salario);
        $stmt->bindParam(":carga_horaria", $carga_horaria);
        $stmt->bindParam(":data_publicacao", $data_publicacao);
        $stmt->bindParam(":data_expiracao", $data_expiracao);
        $result = $stmt->execute();
        $this->dbh = null;

        return $result;
    }

    public function delete(int $id)
    {
        $query = "DELETE FROM vaga WHERE id = :id";
        $stmt = $this->dbh->prepare($query);
        $stmt->bindParam(":id", $id);

        $result = $stmt->execute();
        $result = $stmt->rowCount();
        $this->dbh = null;
        return $result;
    }


}



