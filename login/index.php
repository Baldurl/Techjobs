<?php
include_once __DIR__ . '/../layouts/header.php';
include_once __DIR__ . '/../layouts/footer.php';

?>

<!doctype html>
<html lang="pt-br">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,
     initial-scale=1, shrink-to-fit=no">

    <!--Estilo BOOTSTRAP-->
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">

    <!--Estilo CSS -->
    <link rel="stylesheet" href="../assets/css/login.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>TECH JOBS</title>
</head>

<body>


<main class="main-blog">
    <div class="card-login">
        <form action="validarlogin.php" method="post">

            <div class="container">
                <div class="row text">
                    <div class="col-md-12">
                        <div class="card-login-content"
                        <div class="card-body font-weight-bold card-login-content-text">

                            <div class="form-group card-login-content-input">
                                <label for="email">E-mail</label>
                                <input name="email" type="text" class="form-control" id="email"
                                       placeholder="***@email.com">

                                <label for="senha">Senha</label>
                                <input name="senha" type="password" class="form-control" id="senha"
                                       placeholder="********">
                                <?php
                                if (isset($_GET['login']) && $_GET['login'] == 'erro') { ?>
                                    <div style="color: darkred; font-size: 1.2rem"> Login
                                        inválido.
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <p class="text"><a href="recuperarSenha.php">Recuperar senha</a></p>
                    <p class="text"><a href="../usuarios/cadastro.php">Ainda não é cadastrado? cadastre-se</a></p>

                    <button type="submit" class="btn btn-primary btn-lg btn-login">Login</button>
                </div>
            </div>
        </form>
    </div>


</main>


</body>

</html>