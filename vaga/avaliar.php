<?php
session_start();
require_once __DIR__ . "/../layouts/headerLogin.php";


?>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width,
     initial-scale=1, shrink-to-fit=no">

<!--Estilo BOOTSTRAP-->
<link rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">


<!--Estilo CSS -->
<link rel="stylesheet" href="../assets/css/login.css">
<link rel="stylesheet" href="../assets/css/style.css">
<link rel="stylesheet" href="../assets/css/button.css">
<main class="main-blog">
    <div class="card-login">


        <form action="avaliar_save.php" method="post">
            <div class="container">
                <div class="row text">
                    <div class="col-md-12">
                        <div class="card-login-content">
                            <div class="card-body  card-login-content-text">

                                <div class="form-group card-login-content-input">
                                    <label for="nome">Título</label>
                                    <input type="text" name="nome" style="width: 100%">

                                    <label for="feedback">Descrição</label>
                                    <textarea style="width: 100%" name="feedback" id="feedback" cols="30" rows="10">
                                        </textarea>


                                </div>
                            </div>
                        </div>

                        <button type="submit" class=" btn-primary btn-orange">Confirmar</button>
                    </div>
                </div>
        </form>
    </div>


</main>



