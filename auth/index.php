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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">


    <!--Estilo CSS -->
    <link rel="stylesheet" href="../assets/css/login.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/button.css">


    <title>TechJobs - login</title>
</head>
<body>
<header class="main-header">

    <nav class="main-header-content">

        <div class="logo">
            <a href="../view/index.php">
                <img src="../assets/img/Tech%20(1).svg" alt="" width="200px" height="100px">
            </a>
        </div>

        <nav class="menu">

            <ul>
                <li class="item-menu">
                    <a href="../index.php">
                        <span class="icon"><i class="bi bi-house-door"></i></span>
                        <span class="txt-link">Home</span>
                    </a>
                </li>

                <li class="item-menu">
                    <a style="color: coral" href="../usuarios/opçõesCadastro.php">
                        <span class="icon"><i class="bi bi-box-arrow-in-right"></i></span>
                        <span class="txt-link">Cadastrar</span>
                    </a>
                </li>

            </ul>


        </nav>
    </nav>
</header>

<?php if (isset($_GET['cadastro']) && $_GET['cadastro'] == 'sucesso') { ?>
    <div class="update-confirmation-success" style="width: 38%">
        <div class="update-confirmation-header">
            <h2>Você foi cadastrado, faça o login para ter o acesso!</h2>
        </div>
    </div>
<?php } ?>


<main class="main-blog">
    <div class="card-login">
        <form action="validarlogin.php" method="post">

            <div class="container">
                <div class="row text">
                    <div class="col-md-12">
                        <div class="card-login-content">
                        <div class="card-body font-weight-bold card-login-content-text">

                            <div class="form-group card-login-content-input">
                                <label for="email">E-mail</label>
                                <input name="email" type="text" class="form-control" id="email"
                                       required placeholder="***@email.com">

                                <label for="senha">Senha</label>
                                <input name="senha" type="password" class="form-control" id="senha"
                                      required placeholder="********">
                                <?php
                                if (isset($_GET['auth']) && $_GET['auth'] == 'erro') { ?>
                                    <div style="color: darkred; font-size: 1.2rem"> Email ou senha
                                        inválido.
                                    </div>
                                <?php } ?>
                                <?php
                                if (isset($_GET['auth']) && $_GET['auth'] == 'erro2') { ?>
                                    <div style="color: darkred; font-size: 1.2rem"> Faça o login para poder ter acesso às vagas
                                    </div>
                                <?php } ?>
                                <?php
                                if (isset($_GET['candidato']) && $_GET['candidato'] == 'sucesso') { ?>
                                    <div style="color: darkseagreen; font-size: 1.2rem"> Candidato cadastrado com sucesso!
                                    </div>
                                <?php } ?>
                                <?php
                                if (isset($_GET['empresa']) && $_GET['empresa'] == 'sucesso') { ?>
                                    <div style="color: darkseagreen; font-size: 1.2rem"> Empresa cadastrada com sucesso!
                                    </div>
                                <?php } ?>






                            </div>
                        </div>
                    </div>
                    <p class="text"><a href="recuperarSenha.php">Recuperar senha</a></p>
                    <p class="text"><a href="../usuarios/opçõesCadastro.php">Não possui uma conta?</a></p>

                    <button type="submit" class=" btn-primary btn-lg btn-login">Login</button>
                </div>
            </div>
        </form>
    </div>


</main>


</body>

</html>