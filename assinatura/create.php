<?php
require_once __DIR__ . "/../../src/dao/perfildao.php";

$perfilDAO = new PerfilDAO();
$perfis = $perfilDAO->getAll();
?>
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <title>Tech Jobs - Candidato</title>
</head>
<body>
<header class="main-header">
    <nav class="main-header-content">

        <div class="logo">
            <a href="../../auth/home.php">TechJobs</a>
        </div>


        <nav class="menu">


            <ul>
                <li class="item-menu">
                    <a href="../../auth/home.php">
                        <span class="icon"><i class="bi bi-house-door"></i></span>
                        <span class="txt-link">Home</span>
                    </a>
                </li>
                <li class="item-menu">
                    <a href="#">
                        <span class="icon"><i class="bi bi-columns"></i></span>
                        <span class="txt-link">Dashboard</span>
                    </a>
                </li>

                <!--Colocar condição de acesso à configuração.
                 Se for um candidato, ele pode alterar dados sendo um perfil candidato.
                 Se for um empresa, ele pode alterar dados sendo um perfil empresa. -->

                <li class="item-menu">
                    <a href="index.php ">
                        <span class="icon"><i class="bi bi-person"></i></span>
                        <span class="txt-link">Perfil</span>
                    </a>
                </li>
                <li class="item-menu">
                    <a href="../../auth/logoff.php">
                        <span class="icon"><i class="bi bi-box-arrow-right"></i></span>
                        <span class="txt-link">Logoff</span>
                    </a>
                </li>
            </ul>
        </nav>
    </nav>
</header>
<main class="main-candidato">
    <div class="card-candidato">

        <h2>Novo Usuário</h2>

        <form action="save.php" method="post">
            <div class="container">

                <div class="row text">
                    <div class="col-md-12">
                        <div class="card-body font-weight-bold">

                            <div class="form-group card-candidato-content">
                                <input name="name" type="text" class="form-control" id="name"
                                       placeholder="Nome">

                                <input name="email" type="email" class="form-control" id="email"
                                       placeholder="E-mail">

                                <div class="card-candidato-content-row">
                                    <div class="form-group col-xs-3">
                                        <label for="cpf">Cpf</label>
                                        <input name="cpf" type="cpf" class="form-control" id="cpf"
                                               placeholder="00-000-000-00">

                                    </div>
                                    <div class="form-group col-xs-3">
                                        <label for="ddd"> DDD</label>
                                        <input name="ddd" type="ddd" class="form-control" id="ddd"
                                               placeholder="00">

                                    </div>
                                    <div class="form-group col-xs-3">
                                        <label for="telefone">Telefone</label>
                                        <input name="telefone" type="telefone" class="form-control" id="telefone"
                                               placeholder="00000-0000">
                                    </div>
                                </div>
                                <input name="senha" type="password" class="form-control" id="senha"
                                       placeholder="Senha">
                                <input name="senha2" type="password" class="form-control" id="senha2"
                                       placeholder="Confirme a senha">

                                <div>
                                    <label for="perfil" style="display: block">Perfil</label>
                                    <select name="perfil">
                                        <?php foreach ($perfis as $perfil) : ?>
                                            <option value="<?= $perfil['id'] ?>"><?= $perfil['nome'] ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-login">Salvar</button>

                </div>
            </div>
        </form>

    </div>
</main>
</body>