<?php
//login.php
$login = $_POST["login"];
$senha = $_POST["senha"];
try{
    $conexao = new PDO('mysql:host=localhost;dbname=projetox',
    "root", "");//criando query para consultar no banco de dados
    $sql = "SELECT * FROM usuario where senha=? and login=? ";
    //cria sql com duas variaveis de entrada
    $stmt = $conexao->prepare($sql);//prepara sql a ser executada
    $stmt->bindValue(1,$senha);//associa o valor senha a 1a interrogação
    $stmt->bindValue(2,$login);//associa o valor senha a 2a interrogação?
    $stmt->execute();//executa comando sql
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
    if($usuario== null || empty($usuario)){
        // se o usuario for nulo ou vazio:
        header("location:formLogin.php?msg=Login ou senha errado!");
        //redireciona para a pagina formLogin.php
    }else{
        //senão significa que o usuario foi encontrado
        session_start();//inicializando a sessão
        $_SESSION["nome"]  =$usuario["nome"];
        $_SESSION["login"] =$usuario["login"];
        $_SESSION["perfil"]=$usuario["perfil"];
        header("location:home.php");
    }
    //recupera a 1a linha do resultado e coloca na variavel $usuario
    //TODO : verificar se foi encontrado um usuario e criar sessao
}catch(PDOException $e){
   echo $e->getMessage();
}
?>