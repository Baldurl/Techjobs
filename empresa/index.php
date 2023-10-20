<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,
     initial-scale=1, shrink-to-fit=no">

  <!--Estilo CSS -->
  <link rel="stylesheet" href="../../css/login.css">
  <link rel="stylesheet" href="../../css/style.css">
  <title>TECH JOBS - Cadastro empresa</title>
</head>

<body>

<header class="main-header">
    <nav class="main-header-content">
        <div class="logo">
            <a href="../index.html">TechJobs</a>
        </div>
        <ul>
            <li><a href="index.html" title="Home">HOME</a></li>
            <li><a href="#expecialista" title="expecialistas">EQUIPE</a></li>
            <li><a href="#news" title="Noticias">ÁREA T.I</a></li>
        </ul>
        <span class="btn">
        <button class="btn-outline"><a href="login/index.php">Login</a></button>
        <button class="btn-gordo"><a href="cadastroEmpresa/cadastroEmpresa.php">Cadastrar</a></button>
        </span>
    </nav>
</header>


  <main class="main-blog">


    <section class="card-login">
      <header>
        <h1>Cadastre sua empresa</h1>
      </header>



      <!-- Abre formulário -->
      <form action="create.php" method="POST">
        <div class="card-login-field1">
          <input type="text" name="nome" id="nome" placeholder="Insira o nome fantasia">
          <input type="text" name="razao_social" id="razao_social" placeholder="Insira a razão social">
          <input type="email" name="email" id="email" placeholder="Insira o e-mail da empresa">
          <input type="text" name="cnpj" id="cnpj" placeholder="CNPJ">
          <input type="password" name="senha" id="senha" placeholder="Senha">
        </div>

        <header>
          <h2>Telefone</h2>
        </header>
        <div class="card-login-field2">
          <input type="text" name="ddi" id="ddi" placeholder="ddi">
          <input type="text" name="ddd" id="ddd" placeholder="ddd">
          <input type="text" name="telefone" id="telefone" placeholder="Telefone">
        </div>
        <header>
          <h2>Endereço</h2>
        </header>
        <div class="card-login-field3">
          <input type="text" name="cep" id="cep" placeholder="Cep">
          <input type="text" name="cidade" id="cidade" placeholder="Cidade">
          <input type="text" name="logradouro" id="logradouro" placeholder="Logradouro">
          <input type="text" name="bairro" id="bairro" placeholder="Bairro">
          <input type="text" name="rua" id="rua" placeholder="Rua">
          <input type="text" name="complemento" id="complemento" placeholder="Complemento">
        </div>
        <button type="submit" class="btn-login">Cadastrar</button>
      </form>
      <!-- Fecha formulário -->


      <a class="a1" href="../../login/recuperarSenha.php">
        Recuperar senha
      </a>
      <br>
      <a class="a2" href="../cadastro.php">
        Está a procura de emprego? Faça o seu cadastro!
      </a>

    </section>



  </main>


<footer class="footer-main">
    <ul>
        <li>
            <h2>Nossas páginas</h2>
        </li>
        <li>
            <a href="../../index.php">
                <h3>Home</h3>
            </a>
        </li>
        <li>
            <a href="../../index.php">
                <h3>Sobre</h3>
            </a>
        </li>
        <li>
            <a href="../../index.php">
                <h3>Contato</h3>
            </a>
        </li>
    </ul>



</footer>



</body>

</html>