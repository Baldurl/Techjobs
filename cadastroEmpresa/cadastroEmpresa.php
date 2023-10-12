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
          <label for="nome"></label>
          <input type="text" name="nome" id="nome" placeholder="Insira o nome fantasia">
          <label for="razao_social"></label>
          <input type="text" name="razao_social" id="razao_social" placeholder="Insira a razão social">
          <label for="email"></label>
          <input type="email" name="email" id="email" placeholder="Insira o e-mail da empresa">
          <label for="cnpj"></label>
          <input type="text" name="cnpj" id="cnpj" placeholder="CNPJ">
          <label for="senha"></label>
          <input type="password" name="senha" id="senha" placeholder="Senha">
        </div>

        <header>
          <h2>Telefone</h2>
        </header>
        <div class="card-login-field2">
          <label for="ddi"></label>
          <input type="text" name="ddi" id="ddi" placeholder="ddi">
          <label for="ddd"></label>
          <input type="text" name="ddd" id="ddd" placeholder="ddd">
          <label for="telefone"></label>
          <input type="text" name="telefone" id="telefone" placeholder="Telefone">
        </div>
        <header>
          <h2>Endereço</h2>
        </header>
        <div class="card-login-field3">
          <label for="cep"></label>
          <input type="text" name="cep" id="cep" placeholder="Cep">
          <label for="cidade"></label>
          <input type="text" name="cidade" id="cidade" placeholder="Cidade">
          <label for="logradouro"></label>
          <input type="text" name="logradouro" id="logradouro" placeholder="Logradouro">
          <label for="bairro"></label>
          <input type="text" name="bairro" id="bairro" placeholder="Bairro">
          <label for="rua"></label>
          <input type="text" name="rua" id="rua" placeholder="Rua">
          <label for="complemento"></label>
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