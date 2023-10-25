<?php

include_once __DIR__ . '/../database/conexao.php';

class  Vagadao
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
        $id = $_SESSION['usuario']['id'];
        $query = "SELECT * FROM usuario WHERE id = :id;";
        $stmt = $this->dbh->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_BOTH);


        $this->dbh = null;
        return $row;
    }


    public function insert($nome, $tipo, $cargo, $salario, $cargahoraria, $publicacao, $expiracao)
    {

        $nome = filter_input(INPUT_POST, 'name');
        $tipo = filter_input(INPUT_POST, 'tipo');
        $cargo = filter_input(INPUT_POST, 'cargo', FILTER_SANITIZE_NUMBER_INT);
        $salario = filter_input(INPUT_POST, 'salario');
        $cargahoraria = filter_input(INPUT_POST, 'cargahoraria', FILTER_SANITIZE_SPECIAL_CHARS);
        $publicacao = filter_input(INPUT_POST, 'publicacao', FILTER_SANITIZE_EMAIL);
        $expiracao = filter_input(INPUT_POST, 'sexo');
       
        $query = "INSERT INTO usuario (nome, tipo, cargo, salario, cargahoraria, publicacao, expiracao) 
            VALUES (:nome, :tipo, :cargo, :salario, :cargahoraria, :publicacao, 
            :expiracao);";


        $stmt = $this->dbh->prepare($query);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':tipo', $tipo);
        $stmt->bindParam(':cargo', $cargo);
        $stmt->bindParam(':salario', $salario);
        $stmt->bindParam(':cargahoraria', $cargahoraria);
        $stmt->bindParam(':expiracao', $expiracao);
        $stmt->bindParam(':publicacao', $publicacao);
       


        $result = $stmt->execute();

        $this->dbh = null;

        return $result;
    }

    public function update($nome, $tipo, $cargo, $salario, $cargahoraria, $publicacao, $expiracao)
    {
        $id = $_SESSION['usuario']['id'];
        
        $nome = filter_input(INPUT_POST, 'name');
        $tipo = filter_input(INPUT_POST, 'tipo');
        $cargo = filter_input(INPUT_POST, 'cargo', FILTER_SANITIZE_NUMBER_INT);
        $salario = filter_input(INPUT_POST, 'salario');
        $cargahoraria = filter_input(INPUT_POST, 'cargahoraria', FILTER_SANITIZE_SPECIAL_CHARS);
        $publicacao = filter_input(INPUT_POST, 'publicacao', FILTER_SANITIZE_EMAIL);
        $expiracao = filter_input(INPUT_POST, 'sexo');
        $query = "UPDATE vaga SET nome = :nome, senha = :senha WHERE id = :id";
        $stmt = $this->dbh->prepare($query);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":tipo", $senha);
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
        $query = "SELECT id, nome, email, perfil_id FROM usuario WHERE email=:email and senha=:senha";

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


}


