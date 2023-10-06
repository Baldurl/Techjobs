<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,
     initial-scale=1, shrink-to-fit=no">

     <!--Estilo CSS -->
     <link rel="stylesheet" href="CSS/login.css"> 
    <title>TECH JOBS</title>
  </head>
                    
  <body>
      
    <div class="main-login">
      <div class="left-login">
        <form action="candidatoAdd.php" method="post"></form>
        <h1>Cadastro de Candidato<br>TECH JOBS</h1>
      </div>
      <div class="right-login">
        <div class="card-login">
          <h1>Login</h1>
          <div class="textfield">
            <label for="e-mail">E-mail</label>
            <input type="email" name="email" id="email" placeholder="Digite seu e-mail">
          </div>
          <div class="textfield">
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" placeholder="Digite sua senha">
          </div>
           <a href="#">
          Recuperar senha
        </a>
        <br>
        <a href="usuarioEmpresa.php">
          Você é uma empresa? Faça aqui o seu cadastro!
        </a>
        <button type="submit" value="entrar" class="btn-login">Entrar</button> 
          
      </div>
       </div>  
       </div>  
  </body>
</html>