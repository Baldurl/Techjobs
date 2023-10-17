<?php



?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Alterar senha</title>
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
        <button class="btn-outline"><a href="login/index.php">Login</a></button>
        <button class="btn-gordo"><a href="cadastroEmpresa/cadastroEmpresa.php">Cadastrar</a></button>
        </span>
    </nav>
</header>


    <main class="main-blog">
    <div class="card-login">
        <form action="senhaUpdate.php" method="post">


            <div class="card-login-field1">

                <input type="password" name="senha" id="senha" placeholder="Nova senha ">


                <input type="password" name="senha2" id="senha2" placeholder="Confirme sua senha">
            </div>

            <br>
            <button type="submit" value="Confirmar" class="btn-login">Confirmar</button>
        </form>
    </div>
    </main>
</body>
</html>