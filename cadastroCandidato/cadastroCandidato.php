<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,
     initial-scale=1, shrink-to-fit=no">

  <!--Estilo CSS -->
  <link rel="stylesheet" href="../css/login.css">
  <link rel="stylesheet" href="../css/style.css">
  <title>TECH JOBS - Cadastro empresa</title>
</head>

<body>


  <div class="cabecalho">
    <div class="container">
      <section class="banner">
        <p class="p-banner">
        <h1>TechJobs</h1>
      </section>
    </div>
  </div>

  <main class="main-blog">


    <section class="card-login">
      <header>
        <h1>Cadastre-se como candidato</h1>
      </header>



      <!-- Abre formulário -->
      <form action="candidatoAdd.php" method="POST">
        <div class="card-login-field1">
            <label for="nome"></label>
          <input type="text" name="nome" id="nome" placeholder="Insira seu nome">
            <label for="email"></label>
          <input type="email" name="email" id="email" placeholder="Insira seu e-mail">
        </div>

        <header>
          <h2>Telefone</h2>
        </header>
        <div class="card-login-field2">

        </div>
        <header>
          <h2>Endereço</h2>
        </header>
        <div class="card-login-field3">
        </div>
        <button type="submit" class="btn-login">Cadastrar</button>
      </form>
      <!-- Fecha formulário -->


      <a class="a1" href="#">
        Recuperar senha
      </a>
      <br>
      <a class="a2" href="../cadastroEmpresa/cadastroEmpresa.php">
        Você é uma empresa? Faça aqui o seu cadastro!
      </a>

    </section>



  </main>


  <footer class="footer-main">
    <ul>
      <li>
        <h2>Nossas páginas</h2>
      </li>
      <li><a href="../index.html">
          <h3>Home</h3>
          </a>
      </li>
      <li><a href="#">
          <h3>Sobre</h3>
          </a>
      </li>

        <li><a href="#">
          <h3>Contato</h3>
            </a>
      </li>
    </ul>



  </footer>


</body>

</html>