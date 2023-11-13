<?php
require_once __DIR__ . "/../src/dao/assinaturadao.php";




?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,
     initial-scale=1, shrink-to-fit=no">

    <!--Estilo CSS -->
    <link rel="stylesheet" href="../../assets/css/usuario.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <title>Tech Jobs - Assinatura</title>
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

        <h2>Assinatura</h2>

        <form action="save.php" method="post">
            <div class="container">

                <div class="row text">
                    <div class="col-md-12">
                        <div class="card-body font-weight-bold">

                            <div class="form-group card-candidato-content">
                                <label>Valor</label>
                                <select name="valor" id="valor">
                                    <option value="mensal">R$ 15,00</option>
                                    <option value="semestral">R$ 70,00</option>
                                    <option value="mensal">R$ 100,00</option>
                                </select>

                                <label>Tipo</label><br>
                                <select name="tipo" id="tipo">
                                    <option value="mensal">1 Mês</option>
                                    <option value="semestral">6 meses</option>
                                    <option value="Anual">1 ano</option>
                                </select>

                                <label>Data</label><br>
                                <input type="date" name="data"  size="80" required autofocus><br>

                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-login">Salvar</button>
                <button type="submit" class="btn btn-primary btn-lg btn-login">Voltar</button>

            </div>
    </div>
    </form>

    </div>
</main>
</body>