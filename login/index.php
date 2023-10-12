<!doctype html>
<html lang="pt-br">


<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,
     initial-scale=1, shrink-to-fit=no">

  <!--Estilo CSS -->
  <link rel="stylesheet" href="../css/login.css">
  <title>TECH JOBS</title>
</head>

<body>
  <?php include_once '../css/navs/navHeader.html'; ?>

  <main class="main-blog">

    <div class="card-login">
      <header>
        <h2>Faça seu login no<br>TECH JOBS</h2>
      </header>
      <form action="validarlogin.php" method="post">


        <div class="card-login-field1">
<label for="email"></label>
          <input type="email" name="email" id="email" placeholder="Digite seu e-mail">

            <label for="senha"></label>
          <input type="password" name="senha" id="senha" placeholder="Digite sua senha">
        </div>

        <a href="#">
          Recuperar senha
        </a>
        <br>
        <a href="#">
          Ainda não é cadastrado? cadastre-se
        </a>
        <button type="submit" value="entrar" class="btn-login">Entrar</button>
      </form>


    </div>

  </main>

  <?php include_once '../css/navs/navFooter.html'; ?>
</body>

</html>