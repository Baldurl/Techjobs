<?php
require_once __DIR__ . '/../../layouts/header.php';
require_once __DIR__ . '/../../layouts/nav.php';


?>






<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,
     initial-scale=1, shrink-to-fit=no">

    <!--Estilo CSS -->
    <link rel="stylesheet" href="../../css/login.css">
    <link rel="stylesheet" href="../../css/style.css">
    <title>TECH JOBS - Cadastro empresa</title>
</head>

<body>

<header class="main-header">
    <nav class="main-header-content">
        <div class="logo">
            <a href="../../index.php">TechJobs</a>
        </div>
        <ul>
            <li><a href="../index.html" title="Home">HOME</a></li>
            <li><a href="../index.html" title="expecialistas">EQUIPE</a></li>
            <li><a href="../index.html" title="Noticias">ÁREA T.I</a></li>
        </ul>
        <span class="btn">
        <button class="btn-outline"><a href="../../login/login.php">Login</a></button>
        <button class="btn-gordo"><a href="../cadastro.php">Cadastrar</a></button>
        </span>
    </nav>
</header>


<main class="main-blog">


    <section class="card-login">
        <header>
            <h1>Em busca de emprego</h1>
        </header>



        <!-- Abre formulário -->
        <form action="create.php" method="POST">
            <div class="card-login-field1">

                <input type="text" name="nome" id="nome" placeholder="Insira seu nome">

                <input type="email" name="email" id="email" placeholder="Insira seu e-mail">

                <input type="password" name="senha" id="senha" placeholder="Insira sua senha">
            </div>

            <!--        <header>
                      <h2>Telefone</h2>
                    </header>
                    <div class="card-login-field2">

                    </div>
                    <header>
                      <h2>Endereço</h2>
                    </header>-->
            <div class="card-login-field3">
            </div>
            <button type="submit" class="btn-login">Cadastrar</button>
        </form>
        <!-- Fecha formulário -->

        <a class="a1" href="../../login/login.php">
            Já é cadastrado? Faça aqui o login!
        </a>
        <br>
        <a class="a2" href="../empresa/index.php">
            Está contratando? Faça o seu cadastro!
        </a>

    </section>



</main>


<footer class="footer-main">
    <ul>
        <li>
            <h2>Nossas páginas</h2>
        </li>
        <li><a href="../../index.php">
                <h3>Home</h3>
            </a>
        </li>
        <li><a href="#">
                <h3>Sobre</h3>
            </a>
        </li>

        <li><a href="#">
                <h3>Contato</h3>
            </a>
        </li>
    </ul>



</footer>


</body>

</html>