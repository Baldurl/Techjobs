<?php
require_once '../src/conexao.php';


$email = $_POST['email'];
$senha = $_POST['senha'];


# solicita a conexão com o banco de dados e guarda na váriavel dbh.
$dbh = Conexao::getConexao();

# cria uma instrução SQL para selecionar todos os dados na tabela usuarios.
$query = "SELECT id, nome, email, senha FROM usuario WHERE email=:email and senha=:senha";

# prepara a execução da query e retorna para uma variável chamada stmt.
$stmt = $dbh->prepare($query);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':senha', $senha);
$stmt->execute();


$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

if ($usuario == null || empty($usuario)) {
    // se o usuario for nulo ou vazio:
    header("location:index.php?login=erro");
    //redireciona para a pagina login/index.php para preencher os dados
} else {
    //senão significa que o usuario foi encontrado

    header('location:../home/homeCandidato.php');
    session_start(); //inicializando a sessão
    $_SESSION["id"] = $usuario['nome'];
    $_SESSION["nome"] = $usuario['nome'];
    $_SESSION["email"] = $usuario['email'];
    $_SESSION["senha"] = $usuario['senha'];
}

/*    echo '<h2><p>Bem-vindo!' . $usuario['nome'] . '</p></h2>';
    echo '<h3>Id: ' . $usuario['id'] . '</p></h3>';
    echo '<h3>Nome: ' . $usuario['nome'] . '</p></h3>';
    echo '<h3>Email: ' . $usuario['email'] . '</p></h3>';
    echo '<h3>Senha: ' . $usuario['senha'] . '</p></h3>';*/


# devolve a quantidade de linhas retornada pela consulta a tabela.
$quantidadeRegistros = $stmt->rowCount();
# busca todos os dados da tabela usuário.
$usuarios = $stmt->fetchAll();


if ($quantidadeRegistros == "0") {
    echo 'Não existem usuários cadastrados com esse login';
} else {
    while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {
        echo $row['email'];
        echo $row['senha'];
        echo '<hr>';
    }

}

$dbh = null;


/* include_once '../src/conexao.php';
//login.php
$email = $_POST['email'];
$senha = $_POST['senha'];
try {
    $dbh = Conexao::getConexao();
    //criando query para consultar no banco de dados
    $sql = "SELECT * FROM techjobsdb.usuario where email=? and senha=? ";
    //cria sql com duas variaveis de entrada
    $stmt = $dbh->prepare($sql); //prepara sql a ser executada
    $stmt->bindValue(1, $email); //associa o valor senha a 1a interrogação
    $stmt->bindValue(2, $senha); //associa o valor senha a 2a interrogação?
    $stmt->execute(); //executa comando sql



    
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($usuario == null || empty($usuario)) {
        // se o usuario for nulo ou vazio:
        header("location:index.php?msg=Login ou senha errado!");
        //redireciona para a pagina formLogin.php
    } else {
        //senão significa que o usuario foi encontrado
        session_start(); //inicializando a sessão
        $_SESSION["nome"] = $usuario["nome"];
        $_SESSION["login"] = $usuario["login"];
        $_SESSION["perfil"] = $usuario["perfil"];
        header("location:../index.php");
    }
    //recupera a 1a linha do resultado e coloca na variavel $usuario
} catch (PDOException $e) {
    echo $e->getMessage();
} */
