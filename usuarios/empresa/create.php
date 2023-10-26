<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,
     initial-scale=1, shrink-to-fit=no">

    <!--Estilo CSS -->
    <link rel="stylesheet" href="../../assets/css/usuario.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">

    <title>Tech Jobs - Empresa</title>
</head>


<body>
<header class="main-header">

    <nav class="main-header-content">

        <div class="logo">
            <a href="../../index.php">TechJobs</a>
        </div>

        <nav class="menu">

            <ul>
                <li class="item-menu">
                    <a href="../../index.php">
                        <span class="icon"><i class="bi bi-house-door"></i></span>
                        <span class="txt-link">Home</span>
                    </a>
                </li>
                <li class="item-menu">
                    <a style="color: coral" href="../../auth/index.php">
                        <span class="icon"><i class="bi bi-box-arrow-in-right"></i></span>
                        <span class="txt-link">Login</span>
                    </a>
                </li>


            </ul>


        </nav>
    </nav>
</header>

<main class="main-empresa">
    <div class="card-empresa">
        <h2>Criar uma nova conta de empresa</h2>

        <form action="save.php" method="post">
            <div class="container">

                <div class="row text">
                    <div class="col-md-12">
                        <div class="card-body font-weight-bold">

                            <div class="form-group card-empresa-content">

                                <input name="name" type="text" class="form-control" id="name"
                                       placeholder="Nome">

                                <input name="razao_social" type="text" class="form-control" id="razao_social"
                                       placeholder="Razão Social">


                                <input name="email" type="email" class="form-control" id="email"
                                       placeholder="E-mail">

                                <div class="card-empresa-content-row">
                                    <div class="form-group col-xs-3" style="margin:20px;">
                                        <label for="cnpj">Cnpj</label>
                                        <input name="cnpj" type="text" class="form-control" id="cnpj"
                                               placeholder="000.000.000/0000-00">
                                    </div>


                                    <div class="form-group col-xs-3" style="margin:20px;">

                                        <label for="ddd"> DDD</label>
                                        <input name="ddd" type="text" class="form-control" id="ddd"
                                               placeholder="00">
                                    </div>


                                    <div class="form-group col-xs-3" style="margin:20px;">
                                        <label for="telefone">Telefone</label>
                                        <input name="telefone" type="tel" class="form-control" id="telefone"
                                               placeholder="00000-0000">
                                    </div>
                                </div>

                                <input name="senha" type="password" class="form-control" id="senha"
                                       placeholder="Senha">


                                <input name="senha2" type="password" class="form-control" id="senha2"
                                       placeholder="Confirme a senha">
                            </div>
                        </div>
                    </div>


                    <button type="submit" class="btn btn-primary btn-lg btn-login">Cadastrar</button>
                    <p class="text"><a href="../../auth/index.php">Já tem uma conta?</a></p>
                </div>
            </div>
        </form>
    </div>


</main>


</body>

</html>