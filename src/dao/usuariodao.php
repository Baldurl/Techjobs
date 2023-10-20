<?php

include_once __DIR__ . '/../database/conexao.php';

class  Usuariodao
{
    private $dbh;

    public function __construct()
    {
        $this->dbh = Conexao::getConexao();
    }

    public function getAll()
    {
        $query = "SELECT * FROM usuario";
        $stmt = $this->dbh->query($query);
        $rows = $stmt->fetchAll();
        $this->dbh = null;
        return $rows;

    }

    public function getById($id)
    {
        $query = "SELECT * FROM usuario WHERE id = :id";
        $stmt = $this->dbh->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_BOTH);

        $this->dbh = null;
        return $row;
    }


    public function insert($nome, $email, $senha, $perfilId)
    {


        $query = "INSERT INTO usuario (nome, senha, email, perfilId)
        VALUES ( :nome, :senha, :email, :perfilId);";


        $stmt = $this->dbh->prepare($query);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':senha', $senha);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':perfilId', $perfilId);
        $result = $stmt->execute();

        $this->dbh = null;
    }

    public function update($id, $nome, $email, $senha, $perfilId)
    {

        $query = "UPDATE usuario SET nome = :nome, senha = :senha, email = :email, perfilId = :perfilId WHERE id = :id";
        $stmt = $this->dbh->prepare($query);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":senha", $senha);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":perfilId", $perfilId);
        $stmt->bindParam(":id", $id);
        $result = $stmt->execute();
        $this->dbh = null;

        return $result;


    }


    public function delete($id)
    {
        $query = "DELETE FROM usuario WHERE id = :id";
        $stmt = $this->dbh->prepare($query);
        $stmt->bindParam(":id", $id);

        $result = $stmt->execute();
        $result = $stmt->rowcount();

        $this->dbh = null;
        return $result;
    }


    public function validarLogin($email, $senha)
    {
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);
        #cria uma instrução SQL para selecionar todos os dados na tabela usuarios.
        $query = "SELECT * FROM usuario WHERE email=:email and senha=:senha";

        # prepara a execução da query e retorna para uma variável chamada stmt.
        $stmt = $this->dbh->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_BOTH);
        $this->dbh = null;

        return $row;


    }


    public function processarEnvioEmail($email)
    {

        $email = filter_input(INPUT_POST, 'para', FILTER_SANITIZE_EMAIL);
        $query = "SELECT email FROM usuario WHERE email = :email";
        $stmt = $this->dbh->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->dbh = null;

        return $row;
    }

    public function senhaUpdate($senha, $id)
    {
        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);
        $query = "UPDATE usuario SET  senha = :senha WHERE id = :id";
        $stmt = $this->dbh->prepare($query);
        $stmt->bindParam(":senha", $senha);
        $stmt->bindParam(":id", $id);
        $usuario = $stmt->execute();
        $this->dbh = null;

        return $usuario;


    }

    public function getbyEmail($email)
    {

        $query = "SELECT * from usuario WHERE email = :email";
        $stmt = $this->dbh->prepare($query);
        $stmt->bindParam(":email", $email);

        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_BOTH);
        $this->dbh = null;
        return $row;
    }







    /*    public function getAll()
        {
            $query = "SELECT * FROM usuario";
            $stmt = $this->dbh->prepare($query);
            $stmt->execute();
            $stmt->fetchAll();
            return $rows;
            $this->dbh = null;
        }*/

    /*    public function getById($id)
        {
            $query = "SELECT * FROM usuario WHERE id = :id";
            $stmt = $this->dbh->prepare($query);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
            $stmt->fetch();
            $row = $stmt->fetch(PDO::FETCH_BOTH);
            return $row;

            $this->dbh = null;
        }*/

    /*    public function insert(Perfil $usuario)
        {
            $query = "insert into usuario (nome) values (:nome)";
            $stmt = $this->prepare($query);
            $stmt->bindParam(":nome", $usuario->getNome());
            $result = $stmt->execute();
            $this->dbh = null;
        }*/


    /*    public function update(usuario $usuario)
        {
            $query = "update usuario set nome = :nome where id = :id";
            $stmt = $this->dbh->prepare($query);
            $stmt->bindParam(":nome", $usuario->getNome());
            $stmt->bindParam(":id", $usuario->getId());
            $result = $stmt->execute();
            $this->dbh = null;
        }*/

    /*    public function delete($id)
        {
            $query = "delete from usuario where id = :id";
            $stmt->prepare($query);
            $stmt->bindParam(":id", $id);
            $this->dbh = null;
        }*/


}


