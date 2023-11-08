<?php
require_once __DIR__ . "/../src/dao/vagadao.php";
require_once __DIR__ . "/../auth/validarAcesso.php";
require_once __DIR__ . "/../auth/permissoes.php";

$vagaDAO = new VagaDAO();
$vagas = $vagaDAO->getAll();
?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,
     initial-scale=1, shrink-to-fit=no">

    <!--Estilo CSS -->
    <link rel="stylesheet" href="../assets/css/usuario.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/button.css">
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <title>Tech Jobs - Vaga</title>
</head>

<body>
<header class="main-header">

    <nav class="main-header-content">

        <div class="logo">
            <a href="../view/home.php">
                <img src="../assets/img/Tech%20(1).svg" alt="" width="200px" height="100px">
            </a>
        </div>


        <nav class="menu">


            <ul>
                <li class="item-menu">
                    <a href="../view/home.php">
                        <span class="icon"><i class="bi bi-house-door"></i></span>
                        <span class="txt-link">Home</span>
                    </a>
                </li>
                <li class="item-menu">
                    <a href="../view/blog.php">
                        <span class="icon"><i class="bi bi-columns"></i></span>
                        <span class="txt-link">Blog</span>
                    </a>
                </li>

                <!--Colocar condição de acesso à configuração.
Se for um candidato, ele pode alterar dados sendo um perfil candidato.
Se for um empresa, ele pode alterar dados sendo um perfil empresa. -->

                <li class="item-menu">
                    <a href="../usuarios/administrador/index.php ">
                        <span class="icon"><i class="bi bi-person"></i></span>
                        <span class="txt-link">Perfil</span>
                    </a>
                </li>
                <li class="item-menu">
                    <a href="../auth/logoff.php">
                        <span class="icon"><i class="bi bi-box-arrow-right"></i></span>
                        <span class="txt-link">Logoff</span>
                    </a>
                </li>
            </ul>
        </nav>
    </nav>
</header>
<main class="main-vaga">
    <div class="card-vaga">

        <h2>Adicionar vaga</h2>

        <form action="save.php" method="post">
            <div class="container">
                <div class="row text">
                    <div class="col-md-12">
                        <div class="card-body font-weight-bold card-vaga-content">

                            <div class="form-group card-vaga-content">
                                <div>
                                    <label for="nome">Nome do cargo: </label>
                                    <input type="text" name="nome" placeholder="Informe o cargo" size="80" required
                                           autofocus>
                                </div>


                                <div>
                                    <label for="tipo">Tipo: </label>
                                    <select name="tipo" id="tipo">
                                        <option value="">Selecione o tipo</option>
                                        <option value="clt">Efetivo/CLT</option>
                                        <option value="estagio">Estágio</option>
                                        <option value="trainee">Trainee</option>
                                    </select>
                                    <!--<input type="text" name="tipo" placeholder="Informe o tipo de contrato" required>-->
                                </div>
                                <div style="font-size: 1.5rem;">
                                    <label>Descrição: </label>
                                    <textarea name="descricao" rows="16" cols="100" required></textarea>
                                </div>
                                <div>
                                    <label for="salario">Salário: </label>
                                    <input type="text" name="salario" placeholder="Informe o salário." required>
                                </div>
                                <div>
                                    <label for="carga_horaria">Carga horária: </label>
                                    <input type="text" name="carga_horaria" placeholder="Informe a carga horária."
                                           required>
                                </div>
                                <div>
                                    <label for="data_publicacao">Data de Publicação: </label>
                                    <input type="date" name="data_publicacao"
                                           placeholder="Informe a data de publicacao."
                                           required>
                                </div>
                                <div>
                                    <label style
                                           for="data_expiracao">Data de Expiração: </label>
                                    <input type="date" name="data_expiracao" placeholder="Informe a data de publicacao."
                                           required>
                                </div>

                            </div>

                        <input type="hidden" name="id" value="<?= $id ?>">
                        </div>
                        <div class="update-group-btns">
                            <button type="submit" class="btn btn-primary btn-lg ">Salvar</button>

                            <a href="index.php">
                                <button type="button" class="btn btn-primary btn-lg ">
                                    Voltar
                                </button>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>


</main>
</body>