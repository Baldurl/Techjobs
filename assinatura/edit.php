<?php
require_once __DIR__ . '/../../src/dao/usuariodao.php';
require_once __DIR__ . "/../../src/dao/perfildao.php";

$perfilDAO = new PerfilDAO();
$perfis = $perfilDAO->getAll();

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT) ?? 0;
$dao = new AssinaturaDAO();
$assinatura = $dao->getById($id);

if (!$assinatura) {
    header('location: index.php?error=Assinatura não encontrada!');
    exit;
}
?>


<meta charset="UTF-8">
<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="../../assets/css/button.css" rel="stylesheet">
<link href="../../assets/css/style.css" rel="stylesheet">
<link href="../../assets/css/usuario.css" rel="stylesheet">
<link rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

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



<main class="main-information">

    <?php if (isset($_GET['msg']) && $_GET['msg'] == 'erro') { ?>

    <div class="update-confirmation-error">

        <div class="update-confirmation-header">
            <h2>Erro ao alterar dados!</h2>
        </div>


        <?php } ?>
    </div>
    <div class="card-information">
        <div class="container">
            <div class="row text ">
                <div class="col-md-12">
                    <div class="card-body font-weight-bold card-information-main">
                        <div class="card-information-box">
                            <span class="card-information-header"><h1>Alterar Assinatura</h1></span>
                            <form action="update.php" method="POST">
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
                                <input type="date" name="data"  size="80" required autofocus
                                       value="<?= htmlspecialchars($assinatura['data']) ?>"><br>




                                <div class="update-group-btns">
                                    <button type="submit" class="btn-blue btn-primary btn-lg ">Salvar
                                    </button>

                                    <a href="index.php">
                                        <button type="button" class="btn btn-primary btn-lg ">
                                            Voltar
                                        </button>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</main>