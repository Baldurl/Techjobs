<?php
require_once '../src/conexao.php';
/*session_start();
$_SESSION['id'];*/

# solicita a conexão com o banco de dados e guarda na váriavel dbh.
$dbh = Conexao::getConexao();
$senha = $_POST['senha'];
$senha2 = $_POST['senha2'];
$id = 37;


$query = "UPDATE usuario SET senha= :senha WHERE id = 37;";

$stmt = $dbh->prepare($query);
$stmt->bindParam(':senha', $senha);
$result = $stmt->execute();

$dbh = null;
?>


<html>

<head>
    <meta charset="utf-8"/>
    <title>Atualizando senha</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css"
</head>

<body>

<header class="main-header">
    <nav class="main-header-content">
        <div class="logo">
            <a href="../index.html">TechJobs</a>
        </div>
        <ul>
            <li><a href="index.html" title="Home">HOME</a></li>
            <li><a href="#expecialista" title="expecialistas">EQUIPE</a></li>
            <li><a href="#news" title="Noticias">ÁREA T.I</a></li>
        </ul>
        <span class="btn">
        <button class="btn-outline"><a href="index.php">Login</a></button>
        <button class="btn-gordo"><a href="../cadastro/cadastroEmpresa/cadastroEmpresa.php">Cadastrar</a></button>
        </span>
    </nav>
</header>



<div class="container">
    <div class="row">
        <div class="col col-md-12">
            <?php if ($result = true && $_POST['senha2'] == $_POST['senha']) { ?>
                <div class="container">
                    <h1 class="display-4 text-success">Senha alterada com sucesso</h1>
                    <a href="index.php" class="btn btn-success btn-lg mt-5 text-white">Voltar</a>
                </div>
            <?php } else { ?>
                <div class="container">
                    <h1 class="display-4 text-danger">Erro ao alterar senha</h1>
                    <a href="alterarSenha.php" class="btn btn-danger btn-lg mt-5 text-white">Voltar</a>
                </div>
            <?php } ?>
        </div>
    </div>


</div>


</body>
</html>




