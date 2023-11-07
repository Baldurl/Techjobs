<?php require_once __DIR__ . '/../layouts/headerHome.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!--Estilo BOOTSTRAP-->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
    <link href="https://unpkg.com/progressive-image@1.2.0/dist/index.css" rel="stylesheet" type="text/css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!--Título do Browser-->
    <title>TECH JOBS</title>
</head>
<body>

<div class="main-cta">
        <article class="main-cta-banner">
            <div class="main-cta-banner-spacer">
                <p>Aqui conectamos provedores de emprego e candidatos a trabalho</p>
                <div class="col-md-12">
                    <div class="card-body font-weight-bold">
                        <div class="form-group main-cta-banner-busca">
                            <form action="pesquisar.php" method="POST">
                                <label for="vaga">
                                    <h1>Pesquisar vagas</h1>
                                </label>
                                <input type="text" name="vaga" size="50" placeholder="Insira o nome da vaga"></input>
                                <span class="btn-orange">
                                    <button type="submit" class="btn-primary btn-lg">Buscar</button>
                                </span>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="seta">
                    <i class="fa fa-arrow-down"></i>
                </div>
                <p><a href="#" class="saiba-mais">Saiba Mais</a></p>
            </div>
        </article>
    </div>
</body>
</html>

