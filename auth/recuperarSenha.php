<html>

<head>
    <meta charset="utf-8"/>
    <title>Recuperar senha</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css"
</head>

<body>

<header class="main-header">
    <nav style="padding: 30px 0"
         class="main-header-content">
        <div class="logo">
            <a href="../index.php">TechJobs</a>
        </div>
    </nav>
</header>


<div class="container">

    <div class="py-3 text-center" style="margin: 50px auto">
        <h2>Recuperar senha</h2>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="card-body font-weight-bold">
                <form action="processa_envio.php" method="POST">
                    <div class="form-group">
                        <label for="para">E-mail</label>
                        <input name="para" type="text" class="form-control" id="para" placeholder="***@email.com">
                    </div>
                    <div class="form-group">

                        <?php
                        if (isset($_GET['auth']) && $_GET['auth'] == 'erro') {
                            echo '<div style="color: darkred; font-size: 1rem; "> Preencha o campo do e-mail.
                                </div> ';
                        } else if (isset($_GET['auth']) && $_GET['auth'] == 'erro2') {
                            echo '<div style="color: darkred; font-size: 1rem; "> E-mail não encontrado.
                                </div> ';
                        }
                        ?>
                        <button type="submit" class="btn btn-primary btn-lg">Enviar e-mail</button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>