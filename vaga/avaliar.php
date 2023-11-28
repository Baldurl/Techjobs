




<?php 

require_once __DIR__ ."/../layouts/headerLogin.php";


?>

<link rel="stylesheet" href="../assets/css/login.css">

<main class="main-blog">
    <div class="card-login">


        <form action="avaliar_save.php" method="post">
            <div class="container">
                <div class="row text">
                    <div class="col-md-12">
                        <div class="card-login-content">
                        <div class="card-body font-weight-bold card-login-content-text">

                            <div class="form-group card-login-content-input">
                                     <label for="nome">Título</label>
                                       <input type="text" name="nome" >

                                       <label for="feedback">Descrição</label>
                                        <textarea name="feedback" id="feedback" cols="30" rows="10">
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



