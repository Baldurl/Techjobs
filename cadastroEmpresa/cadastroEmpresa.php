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

  <?php include_once '../css/navs/navHeader.html'; ?>



  <main class="main-blog">


    <section class="card-login">
      <header>
        <h1>Cadastre sua empresa</h1>
      </header>



      <!-- Abre formulário -->
      <form action="empresaAdd.php" method="POST">
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


      <a class="a1" href="#">
        Recuperar senha
      </a>
      <br>
      <a class="a2" href="../cadastroCandidato/cadastroCandidato.php">
        Você é um candidato? Faça aqui o seu cadastro!
      </a>

    </section>



  </main>


  <?php include_once '../css/navs/navFooter.html'; ?>



</body>

</html>