<!doctype html>
<html lang="pt-br">


<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,
     initial-scale=1, shrink-to-fit=no">

    <!--Estilo CSS -->
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>TECH JOBS</title>
</head>

<body>
<header class="main-header">
    <nav class="main-header-content">
        <div class="logo">
            <a href="../index.html">TechJobs</a>
        </div>
        <ul>
            <li><a href="../index.html" title="Home">HOME</a></li>
            <li><a href="../index.html" title="expecialistas">EQUIPE</a></li>
            <li><a href="../index.html" title="Noticias">ÁREA T.I</a></li>
        </ul>
        <span class="btn">
        <button class="btn-outline"><a href="login/index.php">Login</a></button>
        <button class="btn-gordo"><a href="../cadastro/cadastro.php">Cadastrar</a></button>
        </span>
    </nav>
</header>


<main class="main-blog">

    <div class="card-login">
        <header>
            <h2>Faça seu login no<br>TECH JOBS</h2>
        </header>
        <form action="validarlogin.php" method="post">


            <div class="card-login-field1">
                <label for="email"></label>
                <input type="email" name="email" id="email" placeholder="Digite seu e-mail">

                <label for="senha"></label>

                <input type="password" name="senha" id="senha" placeholder="Digite sua senha">
            </div>
            <?php
            if (isset($_GET['login']) && $_GET['login'] == 'erro') { ?>
                <div style="color: darkred; font-size: 1.2rem; padding-left: 22% "> Login inválido.</div>
            <?php } ?>


            <a href="recuperarSenha.php">
                Recuperar senha
            </a>
            <br>
            <a href="../cadastro/cadastro.php">
                Ainda não é cadastrado? cadastre-se
            </a>
            <button type="submit" value="entrar" class="btn-login">Entrar</button>
        </form>
    </div>

</main>

<footer class="footer-main">
    <ul>
        <li>
            <h2>Nossas páginas</h2>
        </li>
        <li>
            <a href="../index.html">
                <h3>Home</h3>
            </a>
        </li>
        <li>
            <a href="../index.html">
                <h3>Sobre</h3>
            </a>
        </li>
        <li>
            <a href="../index.html">
                <h3>Contato</h3>
            </a>
        </li>
    </ul>


</footer>
</body>

</html>