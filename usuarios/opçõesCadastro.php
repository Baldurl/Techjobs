<?php


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="shortcut icon" href="" type="">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
          integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous">
    <link href="https://unpkg.com/progressive-image@1.2.0/dist/index.css" rel="stylesheet" type="text/css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/usuario.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"

    <!--Título do Browser-->
    <title>Cadastro</title>
</head>
<header class="main-header">
    <nav class="main-header-content">

        <div class="logo">
            <a href="../view/index.php">
                <img src="../assets/img/Tech%20(1).svg" alt="" width="200px" height="100px">
            </a>
        </div>


        <nav class="menu">
            <ul>
                <li class="item-menu">
                    <a href="../view/index.php">
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
                <li class="item-menu">
                    <a style="color: coral" href="../auth/index.php">
                        <span class="icon"><i class="bi bi-box-arrow-in-right"></i></span>
                        <span class="txt-link">Login</span>
                    </a>
                </li>

            </ul>
        </nav>
    </nav>
</header>
<body id="home">
<main class="main-cadastro">

    <div class="main-cadastro-container">


        <div class="container">
            <a href="candidato/create.php">
                <button type="submit">
                    <span class="container-text">Em busca de emprego?</span>
                    <span>Inscrição de candidatos!</span>
                </button>
            </a>
        </div>


        <div class="container">
            <a href="empresa/create.php">
                <button type="submit">
                    <span class="container-text">Está contratando?</span>
                    <span>Inscrição de empresas!</span>
                </button>
            </a>
        </div>
    </div>
</main>

</body>
</html>