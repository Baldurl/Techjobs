<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
          integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous"/>
    <link href="https://unpkg.com/progressive-image@1.2.0/dist/index.css" rel="stylesheet" type="text/css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>TECH JOBS</title>
</head>
<body>
<header class="main-header">

<nav class="main-header-content">

    <div class="logo">
        <a href="index.php">TechJobs</a>
    </div>


    <nav class="menu">

        <ul>
            <li class="item-menu">
                <a href="index.php">
                    <span class="icon"><i class="bi bi-house-door"></i></span>
                    <span class="txt-link">Home</span>
                </a>
            </li>
            </li>
            <li class="item-menu">
                <a style="color: coral" href="login/login.php">
                    <span class="icon"><i class="bi bi-box-arrow-in-right"></i></span>
                    <span class="txt-link">Login</span>
                </a>
            </li>
                            <li class="item-menu">
                <a style="color: coral" href="usuarios/opçõesCadastro.php">
                    <span class="icon"><i class="bi bi-box-arrow-in-right"></i></span>
                    <span class="txt-link">Cadastrar</span>
                </a>
            </li>

        </ul>


    </nav>
</nav>
</header>
<footer class="footer1">

    <!-- <div class="box-footer1"> -->
    <div class="box-single-footer1">
    </div>
</footer>

<footer class="footer2">

    <div class="w50 p-footer">
        <p>Desenvolvido por Turma G - GRUPO 1<i class="#" aria-hidden="true"></i></p>
    </div>
    <div class="w50 medias-footer2">
        <a href="https://www.instagram.com/Tosaka_61" title="#" target="_blank"><i
                    class="fa fa-instagram"></i></a>
    </div>
    <div class="clear"></div>
</footer>

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