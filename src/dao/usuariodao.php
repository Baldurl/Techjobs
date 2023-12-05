<?php

include_once __DIR__ . '/../database/conexao.php';

class  UsuarioDAO
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

    public function getByPerfilId($perfil_id)
    {

        $query = "SELECT * FROM usuario WHERE perfil_id = :perfil_id";
        $stmt = $this->dbh->prepare($query);
        $stmt->bindParam(":perfil_id", $perfil_id);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_BOTH);

        $this->dbh = null;

        return $row;
    }


    public function insert($nome, $razao_social, $cpf, $cnpj, $senha, $email, $sexo, $ddi, $ddd, $telefone, $cep, $cidade, $logradouro, $bairro, $rua, $complemento, $perfil)
    {

        $nome = filter_input(INPUT_POST, 'name');
        $razao_social = filter_input(INPUT_POST, 'razao_social');
        $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT);
        $cnpj = filter_input(INPUT_POST, 'cnpj');
        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $sexo = filter_input(INPUT_POST, 'sexo');
        $ddi = filter_input(INPUT_POST, 'ddi');
        $ddd = filter_input(INPUT_POST, 'ddd', FILTER_SANITIZE_NUMBER_INT);
        $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);
        $cep = filter_input(INPUT_POST, 'cep');
        $cidade = filter_input(INPUT_POST, 'cidade');
        $logradouro = filter_input(INPUT_POST, 'logradouro');
        $bairro = filter_input(INPUT_POST, 'bairro');
        $rua = filter_input(INPUT_POST, 'rua');
        $complemento = filter_input(INPUT_POST, 'complemento');
        $perfil = filter_input(INPUT_POST, 'perfil', FILTER_VALIDATE_INT);

        $query = "INSERT INTO usuario (nome, razao_social, cpf, cnpj, senha, email, sexo , ddi, 
            ddd, numero, cep, cidade, logradouro, bairro, rua, complemento, perfil_id) 
            VALUES (:nome, :razao_social, :cpf, :cnpj, :senha, :email, 
            :sexo, :ddi, :ddd, :numero, :cep, :cidade, :logradouro, :bairro, :rua, :complemento, :perfil_id);";


        $stmt = $this->dbh->prepare($query);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':razao_social', $razao_social);
        $stmt->bindParam(':cpf', $cpf);
        $stmt->bindParam(':cnpj', $cnpj);
        $stmt->bindParam(':senha', $senha);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':sexo', $sexo);
        $stmt->bindParam(':ddi', $ddi);
        $stmt->bindParam(':ddd', $ddd);
        $stmt->bindParam(':numero', $telefone);
        $stmt->bindParam(':cep', $cep);
        $stmt->bindParam(':cidade', $cidade);
        $stmt->bindParam(':logradouro', $logradouro);
        $stmt->bindParam(':bairro', $bairro);
        $stmt->bindParam(':rua', $rua);
        $stmt->bindParam(':complemento', $complemento);
        $stmt->bindParam(':perfil_id', $perfil);


        $result = $stmt->execute();

        $this->dbh = null;

        return $result;
    }

    public function update($id, $nome, $email, $senha, $perfil): int
    {
        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT) ?? 0;
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);
        $perfil = filter_input(INPUT_POST, 'perfil', FILTER_SANITIZE_NUMBER_INT) ?? 0;
        $query = "UPDATE usuario SET nome = :nome, email = :email, senha = :senha, perfil_id = :perfil_id WHERE id = :id";
        $stmt = $this->dbh->prepare($query);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":senha", $senha);
        $stmt->bindParam(":perfil_id", $perfil);
        $stmt->bindParam(":id", $id);

        $result = $stmt->execute();
        $this->dbh = null;

        return $result;


    }

    public function updateById(int $id, $nome, $senha): int
    {
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);
        $query = "UPDATE usuario SET nome = :nome, senha = :senha WHERE id = :id";
        $stmt = $this->dbh->prepare($query);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":senha", $senha);
        $stmt->bindParam(":id", $id);

        $result = $stmt->execute();
        $this->dbh = null;

        return $result;


    }


    public function delete( $id)
    {

        $query = "DELETE FROM usuario WHERE id = :id";
        $stmt = $this->dbh->prepare($query);
        $stmt->bindParam(":id", $id);

        $result = $stmt->execute();
        $result = $stmt->rowcount();

        $this->dbh = null;
        return $result;
    }
    public function deleteById(int $id): int
    {

        $query = "DELETE FROM usuario WHERE id = :id";
        $stmt = $this->dbh->prepare($query);
        $stmt->bindParam(":id", $id);

        $result = $stmt->execute();

        $this->dbh = null;
        return $result;
    }


    public function validarLogin($email, $senha)
    {
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);


        $query = "SELECT id, nome, email, perfil_id FROM usuario WHERE email=:email and senha=:senha";

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

    public function enviarCurriculo($curriculo, int $id){

        $query = "UPDATE usuario SET curriculo = :curriculo WHERE id = :id";
        $stmt = $this->dbh->prepare($query);
        $stmt->bindParam(":curriculo", $curriculo);
        $stmt->bindParam(":id", $id);
        $resultado = $stmt->execute();
        $this->dbh = null;
        return $resultado;

    }



}



