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
<section class="main-team">
    <div class="main-team-header">
        <h2>Nossa equipe</h2>

    </div>


    <div class="main-team-box app">

        <div class="box-single-team">
            <div class="box-single-team-content">
                <h1>Lucas Caio</h1>
                <h3>Developer front-end</h3>
                <p>
                    Especialista em front-end, apto a estilizar o site de maneira impecável utilizando css e html.
                </p>
                <div class="box-single-medias">
                    <i class="fa fa-2x fa-facebook"></i>
                    <i class="fa fa-2x fa-instagram"></i>
                    <i class="fa fa-2x fa-github"></i>
                </div>
            </div>
        </div>
        <div class="box-single-team">
            <div class="box-single-team-content">
                <h1>Jordan de Carvalho</h1>
                <h3>Developer back-end</h3>
                <p>
                    Especialista em back-end, responsável pelo desenvolvimento de APIs e aplicativos.
                </p>
                <div class="box-single-medias">
                    <i class="fa fa-2x fa-instagram"></i>
                    <i class="fa fa-2x fa-github"></i>
                </div>
            </div>
        </div>

        <div class="box-single-team">
            <div class="box-single-team-content">
                <h1>Pedro Santana</h1>
                <h3>Developer Full-Stack</h3>
                <p>
                    Especialista em análise de requisitos e desenvolvimento de sistemas, abraange de conhecimentos diversos da elaboração de projetos.
                </p>
                <div class="box-single-medias">
                    <i class="fa fa-2x fa-instagram"></i>
                    <i class="fa fa-2x fa-github"></i>
                </div>
            </div>
        </div>

        <div class="box-single-team">
            <div class="box-single-team-content">
                <h1>Ronan Souza</h1>
                <h3>Developer Full-Stack</h3>
                <p>
                    Especialista em atendimento ao suporte e suporte técnico.
                </p>
                <div class="box-single-medias">
                    <i class="fa fa-2x fa-instagram"></i>
                    <i class="fa fa-2x fa-github"></i>
                </div>
            </div>
        </div>


        <!--   LINHA ANIMADA PARA SEPARAR CONTEÚDO
        <div class="box-single-team">
            <div data-aos="fade-up">
                <div class="line"></div>
                <div class="clear"></div>
            </div>
        </div>
         FIM DA LINHA-->

    </div>

</section>
<section class="main_footer">

    <article class="main_footer_our_pages">
        <header>
            <h2>Nossas Páginas</h2>
        </header>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="blog.php">Notícias</a></li>
            <li><a href="equipe.php">Nossa Equipe</a></li>
            <li><a href="contato.php">Contato</a></li>
        </ul>
    </article>

    <article class="main_footer_links">
        <header>
            <h2>Links Úteis</h2>
        </header>
        <ul>
            <li><a href="#">Política de Privacidade</a></li>
            <li><a href="#">Aviso Legal</a></li>
            <li><a href="#">Termos de Uso</a></li>
        </ul>
    </article>

    <article class="main_footer_about">
        <header>
            <h2>Techjobs</h2>
        </header>
        <p>Mantenha-se atualizado com o mercado de trabalho. Desenvolva seu networking e trabalhe para construir o seu
            futuro</p>
    </article>
</section>
<footer class="main_footer_rights">
    <p>ETC - Todos os direitos reservados.</p>
</footer>
</body>
</html>

