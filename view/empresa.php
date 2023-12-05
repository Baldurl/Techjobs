<!DOCTYPE html>
<html lang="pt-br">

<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link rel="shortcut icon" href="" type="">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
          integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous"/>
    <link href="https://unpkg.com/progressive-image@1.2.0/dist/index.css" rel="stylesheet" type="text/css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="../assets/css/button.css" rel="stylesheet">


    <!--Título do Browser-->

    <title>TechJobs </title>

</head>

<body id="home">


<?php require_once __DIR__ . '/../layouts/headerLogin.php';
$nome = $_SESSION['usuario']['nome'];
?>

<div class="main-cta">
    <article class="main-cta-banner">
        <div class="main-cta-banner-spacer">
            <p>Olá, <?php echo ucfirst($nome); ?><br>Seja bem-vindo(a)</p>
            <div class="col-md-12">
                <div class="card-body font-weight-bold">
                    <div class="form-group main-cta-banner-busca">
                            <section class="section__btn">
                                <a class="btn-orange" href="../vaga/create.php">Publicar nova vaga</a>
                                <a class="btn" href="../vaga/index.php">Consulte suas vagas </a>

                            </section>
                        <section class="main_optin_empresa">
                            <div class="main_optin_content_empresa">
                                <header>
                                    <h1>Receba conteúdos exclusivos e alavanque suas vagas!<br> Veja os benefícios e faça já sua assinatura
                                    </h1>
                                </header>
                                <article>
                                    <header>
                                        <a href="#" class="btn-orange">Assinatura premium para empresas</a>
                                    </header>
                                </article>
                            </div>
                        </section>
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




<!--<article class="opt-in">
    <div class="opt-in-content">
        <a href="#home" class="scrollup show-scroll">
            <i class="fa fa-arrow-up scrollup__icon"></i>
        </a>
    </div>
</article>
-->


<!--    <article class="opt-in">
        <div class="opt-in-content">
            <a href="#home" class="scrollup show-scroll">
                <i class="fa fa-arrow-up scrollup__icon"></i>
            </a>
        </div>
    </article>
-->




<section class="main-noticias">
    <header>
        <h2>Notícias recentes</h2>
    </header>
    <div class="main-noticias-content" id="news">
        <div class="box-noticias">
            <div class="box-noticias-content">

                <div class="box-noticias-content">
                    <h2>Pensar como um programador!!</h2>
                    <img src="../assets/img/programador.jpg" alt="Pensar como um rogramador" width="500" height="300" style="padding: 30px 0; border-radius: 15px">
                    <h4>
                        Pensar como um programador é usar a tecnologia como extensão das suas capacidades. É
                        uma
                        forma que você tem de usar o digital para resolver problemas e alcançar seus objetivos.
                    </h4>
                    <h4>
                        <a href="https://www.freecodecamp.org/portuguese/news/como-pensar-como-um-programador-licoes-de-resolucao-de-problemas/"
                           target="_blank" style="text-decoration: none" rel="external">Ver Mais <i class="fa fa-arrow-right"></i></a>
                    </h4>
                </div>
            </div>
        </div>
        <div class="box-noticias">
            <div class="box-noticias">
                <div class="box-noticias-content">
                    <h2>Tecnologias & hardwares</h2>
                    <img src="../assets/img/adrenaline.jpg" alt="adrenaline" width="500" height="300" style="padding: 30px 0; border-radius: 15px">

                    <h4>
                        Conheça um dos maiores canais de tecnologia e hardware do país "Adrenaline".
                        Uma comunidade online com fonte de informação sobre Tecnologia, Hardware, jogos,
                        notícias,
                        artigos e análises de eletrônicos de consumo, gadgets, hardwares para computador e
                        games.
                    </h4>
                    <h4><a href="https://www.adrenaline.com.br/" target="_blank" style="text-decoration: none" rel="external">Ver Mais <i
                                    class="fa fa-arrow-right"></i></a></h4>
                </div>
            </div>
        </div>
        <div class="box-noticias">
            <div class="box-noticias">
                <div class="box-noticias-content">
                    <h2>Tecnologia & inovação</h2>
                    <img src="../assets/img/web-summit.jpg" alt="web-summit" width="500" height="300" style="padding: 30px 0; border-radius: 15px">

                    <h4>
                        Web Summit: Conheça 7 startups que prometem mudar seus setores com IA.
                        O maior evento de inovação e tecnologia do mundo deixou claro a nova máxima:
                        quanto mais inteligência artificial, melhor serão os negócios.
                    </h4>
                    <h4><a href="https://exame.com/inteligencia-artificial/web-summit-conheca-7-startups-que-prometem-mudar-seus-setores-com-ia/" target="_blank"
                           style="text-decoration: none" rel="external">Ver Mais <i  class="fa fa-arrow-right"></i></a></h4>
                </div>
            </div>
        </div>
        <div class="box-noticias">
            <div class="box-noticias">
                <div class="box-noticias-content">
                    <h2>Inteligência artificial na saúde</h2>
                    <img src="../assets/img/saude-inteligencia-artificial.png" alt="saude-inteligencia-artificial" width="500" height="300" style="padding: 30px 0; border-radius: 15px">

                    <h4>
                        Cientistas citam regras para bem usar a inteligência artificial na saúde. Avanços em aplicações na oftalmologia,
                        por exemplo, já permitem detectar doença de Parkinson com cerca de sete anos de antecedência.

                    </h4>
                    <h4 style="margin-bottom: 60px"><a href="https://veja.abril.com.br/coluna/coluna-claudio-lottenberg/regras-para-bem-usar-a-inteligencia-artificial-na-saude/" target="_blank"
                                                       style="text-decoration: none;" rel="external">Ver Mais <i  class="fa fa-arrow-right"></i></a></h4>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="clear"></div>


<!-- INICIO DOBRA RODAPÉ -->


<section class="main_footer">

    <article class="main_footer_our_pages">
        <header>
            <h2>Nossas Páginas</h2>
        </header>
        <ul>
            <li><a href="../auth/index.php">Home</a></li>
            <li><a href="noticias.php">Notícias</a></li>
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
<!-- FIM DOBRA RODAPÉ -->


<a href="#home" class="scrollup show-scroll" id="scroll-up">
    <i class="fa fa-arrow-up scrollup__icon"></i>
</a>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://unpkg.com/progressive-image@1.2.0/dist/index.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="js/main.js"></script>
<script>
    AOS.init({
        mirror: true
    });

    (function () {
        new Progressive({
            el: '#app',
            lazyClass: 'lazy',
            removePreview: true,
            scale: true
        }).fire()
    })()
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-RDBD06ZRL9"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'G-RDBD06ZRL9');
</script>

</body>

</html>