<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">
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

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-login-content"
                        <div class="card-body font-weight-bold">
                            <div style="color: #333333; padding: 5px 0 ; font-size: 1.2rem"
                                 class="form-group card-login-content-input">
                                <label for="senha">Senha</label>
                                <input name="senha" type="password" class="form-control" id="senha"
                                       placeholder="********">

                                <label for="senha2">Confirmar senha</label>
                                <input name="senha2" type="password" class="form-control" id="senha2"
                                       placeholder="********">
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-login">Alterar senha</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</main>
</body>
</html>