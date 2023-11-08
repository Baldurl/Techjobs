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
    <style>

        .main-genero {

            display: block;
            justify-content: center;
            flex-basis: 100%;
        }

        .main-genero > h3 {
            font-size: 1.6rem;
            font-weight: 700;

        }

        .main-genero-content {
            display: flex;
            justify-content: center;

        }

        /* The container */
        .genero {
            display: block;
            position: relative;
            padding-left: 35px;
            padding-right: 30px;
            margin-bottom: 50px;
            cursor: pointer;
            font-size: 15px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }


        /* Hide the browser's default radio button */
        .genero input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }

        /* Create a custom radio button */
        .checkmark {
            position: absolute;
            left: 0;
            height: 15px;
            width: 15px;
            background-color: #eee;
            border-radius: 50%;
        }

        /* On mouse-over, add a grey background color */
        .genero:hover input ~ .checkmark {
            background-color: #ccc;
        }

        /* When the radio button is checked, add a blue background */
        .genero input:checked ~ .checkmark {
            background-color: #2196F3;
        }

        /* Create the indicator (the dot/circle - hidden when not checked) */
        .genero:after {
            content: "";
            position: absolute;
            display: none;
        }

        /* Show the indicator (dot/circle) when checked */
        .genero input:checked ~ .checkmark:after {
            display: block;
        }

        /* Style the indicator (dot/circle) */
        .genero .checkmark:after {
            top: 9px;
            left: 9px;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: white;
        }
    </style>
</head>
<body>
<header class="main-header">

    <nav class="main-header-content">

        <div class="logo">
            <a href="../../view/home.php">
                <img src="../../assets/img/Tech%20(1).svg" alt="" width="200px" height="100px">
            </a>
        </div>


        <nav class="menu">


            <ul>
                <li class="item-menu">
                    <a href="../../view/home.php">
                        <span class="icon"><i class="bi bi-house-door"></i></span>
                        <span class="txt-link">Home</span>
                    </a>
                </li>
                <li class="item-menu">
                    <a href="../../view/blog.php">
                        <span class="icon"><i class="bi bi-columns"></i></span>
                        <span class="txt-link">Blog</span>
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
                                       required autofocus placeholder="Nome">

                                <input name="email" type="email" class="form-control" id="email"
                                       required autofocus placeholder="E-mail">

                                <input name="razao_social" type="razao_social" class="form-control" id="email"
                                       placeholder="Razão social">

                                <input name="cpf" type="cpf" class="form-control" id="cpf"
                                       placeholder="CPF">

                                <input name="cnpj" type="cnpj" class="form-control" id="cnpj"
                                       placeholder="CNPJ">

                                <div class="main-genero">
                                    <h3>Gênero:</h3>
                                    <div class="main-genero-content">
                                        <label class="genero">Masculino
                                            <input type="radio" checked="checked" name="radio">
                                            <span class="checkmark"></span>
                                        </label>

                                        <label class="genero">Feminino
                                            <input type="radio" name="radio">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="genero">Outro
                                            <input type="radio" name="radio">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>



                                <div class="card-candidato-content-row">
                                    <div class="form-group col-xs-3">
                                        <label for="ddi">DDI</label>
                                        <input name="ddi" type="ddi" class="form-control" id="ddi"
                                               required autofocus placeholder="00">

                                    </div>
                                    <div class="form-group col-xs-3">
                                        <label for="ddd"> DDD</label>
                                        <input name="ddd" type="ddd" class="form-control" id="ddd"
                                               required autofocus placeholder="00">

                                    </div>
                                    <div class="form-group col-xs-3">
                                        <label for="telefone">Telefone</label>
                                        <input name="telefone" type="telefone" class="form-control" id="telefone"
                                               required autofocus placeholder="00000-0000">
                                    </div>
                                </div>
                                <input name="senha" type="password" class="form-control" id="senha"
                                       required autofocus placeholder="Senha">
                                <input name="senha2" type="password" class="form-control" id="senha2"
                                       required autofocus placeholder="Confirme a senha">

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