<?php
session_start();
if (isset($_SESSION['usuario'])) {
    require_once __DIR__ . '/../layouts/headerlogin.php';
} else {
    require_once __DIR__ . '/../layouts/headerHome.php';
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Estilo BOOTSTRAP-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
          integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous"/>
    <link href="https://unpkg.com/progressive-image@1.2.0/dist/index.css" rel="stylesheet" type="text/css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!--Título do Browser-->
    <title>TECH JOBS</title>
</head>
<body>


<section class="main-noticias">
    <div class="main-noticias-content" id="news">
        <div class="box-noticias">
            <div class="box-noticias-content">

                <div class="box-noticias-content">
                    <h2>Pensar Como um programador!!</h2>
                    <p>
                        Pensar como um programador: é usar a tecnologia como extensão das suas capacidades. É
                        uma
                        forma que você tem de usar o digital para resolver problemas e alcançar seus objetivos.
                    </p>
                    <p>
                        <a href="https://www.freecodecamp.org/portuguese/news/como-pensar-como-um-programador-licoes-de-resolucao-de-problemas/"
                           target="_blank" rel="external">Ver Mais <i class="fa fa-arrow-right"></i></a>
                    </p>
                </div>
            </div>
        </div>
        <div class="box-noticias">
            <div class="box-noticias">
                <div class="box-noticias-content">
                    <h2>Tecnologias & Hardwares</h2>
                    <p>
                        Conheça um dos maiores canais de tecnologia e hardware do país "Adrenaline".
                        Uma comunidade online com fonte de informação sobre Tecnologia, Hardware, jogos,
                        notícias,
                        artigos e análises de eletrônicos de consumo, gadgets, hardwares para computador e
                        games.
                    </p>
                    <p><a href="https://www.adrenaline.com.br/" target="_blank" rel="external">Ver Mais <i
                                    class="fa fa-arrow-right"></i></a></p>
                </div>
            </div>
        </div>
        <div class="box-noticias">
            <div class="box-noticias">
                <div class="box-noticias-content">
                    <h2>Tecnologias & Hardwares</h2>
                    <p>
                        Conheça um dos maiores canais de tecnologia e hardware do país "Adrenaline".
                        Uma comunidade online com fonte de informação sobre Tecnologia, Hardware, jogos,
                        notícias,
                        artigos e análises de eletrônicos de consumo, gadgets, hardwares para computador e
                        games.
                    </p>
                    <p><a href="https://www.adrenaline.com.br/" target="_blank" rel="external">Ver Mais <i
                                    class="fa fa-arrow-right"></i></a></p>
                </div>
            </div>
        </div>
        <div class="box-noticias">
            <div class="box-noticias">
                <div class="box-noticias-content">
                    <h2>Tecnologias & Hardwares</h2>
                    <p>
                        Conheça um dos maiores canais de tecnologia e hardware do país "Adrenaline".
                        Uma comunidade online com fonte de informação sobre Tecnologia, Hardware, jogos,
                        notícias,
                        artigos e análises de eletrônicos de consumo, gadgets, hardwares para computador e
                        games.
                    </p>
                    <p><a href="https://www.adrenaline.com.br/" target="_blank" rel="external">Ver Mais <i
                                    class="fa fa-arrow-right"></i></a></p>
                </div>
            </div>
        </div>
    </div>
</section>


</body>
</html>

