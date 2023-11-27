<?php

session_start();
require_once __DIR__ . '/../src/dao/vagadao.php';

if (isset($_SESSION['usuario'])) {
    require_once __DIR__ . '/../auth/permissoes.php';
    require_once __DIR__ . '/../layouts/headerlogin.php';
} else {
    require_once __DIR__ . '/../layouts/headerHome.php';
}


$dao = new VagaDAO();
$vagas = $dao->getByVaga('$nome');
$quantidadeRegistros = count($vagas);

/*$dao = new VagaDAO();
$usuario = $dao->getByUsuario('$usuario');*/


?>

<!--Estilo BOOTSTRAP-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!--Estilo CSS-->
<link rel="stylesheet" href="../assets/css/style.css">
<link rel="stylesheet" href="../assets/css/button.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">


<title>Consulta vagas</title>


<body id="home">

<div class="main-cta">
    <article class="main-cta-banner">
        <div class="main-cta-banner-spacer">
            <p>Aqui conectamos provedores de emprego e candidatos a trabalho</p>
            <div class="col-md-12">
                <div class="card-body font-weight-bold">
                    <div class="form-group main-cta-banner-busca">
                        <form action="consulta.php" method="POST">
                            <label for="vaga">
                                <h1>Pesquisar vagas</h1>
                            </label>
                            <input type="text" name="vaga" size="50" placeholder="Insira o nome da vaga"></input>
                            
                                    <button type="submit" class="btn-primary btn-orange">Buscar</button>
                                
                        </form>
                    </div>
                </div>
            </div>

            <!--            <div class="seta">
                            <i class="fa fa-arrow-down"></i>
                        </div>
                        <p><a href="#" class="saiba-mais">Saiba Mais</a></p>-->
        </div>
    </article>
</div>

<section class="main-blog">


    <div class="main-blog-content">
        <?php
        if (!count($vagas)) { ?>

            <div class="main-blog-header">
                <h2 class="aos-init aos-animate">
                    Ainda não temos as vagas que você procura :( <br>
                    <a href="../">
                     <button type="button" class="btn btn-primary btn-lg ">
                                            Voltar
                     </button>
                    </a>
                </h2>

            </div>


        <?php } else { ?>
            <div class="main-blog-header">
                <h2 class="aos-init aos-animate">
                    Resultado da busca:
                </h2>
            </div>

            <?php foreach ($vagas

                           as $vaga) { ?>


                <article>
                    <div class="icon"><i class="fa fa-3x fa-angellist"></i></div>
                    <div class="content" title="<?= $vaga['descricao'] ?>">
                        <?php echo '<strong>Vaga: </strong>' . $vaga['nome'] ?><br>
                        <p><?php echo '<strong>Tipo: </strong> ' . $vaga['tipo'] ?><br>
                            <?php echo '<strong>Salário: </strong> ' . $vaga['salario'] ?><br>
                            <?php echo '<strong>Descrição: ...</strong> '; ?>

                        </p>


                        <span class="btn-orange">
                                    <a href="candidatar.php?id=<?= $vaga['id'] ?>"><button type="submit"
                                                                                           class="btn-primary btn-lg">Ver detalhes</button></a>
                                </span>

                    </div>
                </article>
            <?php }
        } ?>
    </div>
</section>
</body>