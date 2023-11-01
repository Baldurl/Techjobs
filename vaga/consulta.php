<?php

session_start();
require_once '../src/dao/vagadao.php';

$dao =  new VagaDAO();
$vagas  = $dao->getByVaga('$nome');



if (!count($vagas)) {

    echo 'Não foram encontrados resultados pelo termo buscado.';
}

foreach ($vagas as $vaga) {

    $vaga['nome'];
}




?>



<link rel="stylesheet" href="../assets/css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<title>Vagas</title>

<body id="home">
    <header class="main-header">

        <nav class="main-header-content">

            <div class="logo">
                <a href="../index.php">
                    <img src="../assets/img/Techjobs-logo.png" alt="" width="130px" height="80px">
                </a>
            </div>


            <nav class="menu">

                <ul>
                    <li class="item-menu">
                        <a href="../index.php">
                            <span class="icon"><i class="bi bi-house-door"></i></span>
                            <span class="txt-link">Home</span>
                        </a>
                    </li>
                    </li>
                    <li class="item-menu">
                        <a style="color: coral" href="../auth/index.php">
                            <span class="icon"><i class="bi bi-box-arrow-in-right"></i></span>
                            <span class="txt-link">Login</span>
                        </a>
                    </li>
                    <li class="item-menu">
                        <a style="color: coral" href="usuarios/opçõesCadastro.php">
                            <span class="icon"><i class="bi bi-box-arrow-in-right"></i></span>
                            <span class="txt-link">Cadastrar</span>
                        </a>
                    </li>

                </ul>


            </nav>
        </nav>
    </header>



    <section class="main-blog">

        <div class="main-blog-header">
            <h2 class="aos-init aos-animate">
                Resultados da busca
            </h2>
        </div>

        <div class="main-blog-content">
            <article>
                <div class="icon"><i class="fa fa-3x fa-angellist"></i></div>
                <div class="content" title="<?= $vaga['descricao'] ?>"> 
                    <?php echo '<strong>Nome: </strong>' . $vaga['nome']  ?><br>
                    <p><?php echo '<strong>Tipo: </strong> ' . $vaga['tipo']  ?><br>
                        <?php echo '<strong>Salário: </strong> ' . $vaga['salario']  ?><br>
                        <?php echo  '<strong>Descrição: </strong> ' .
                         substr($vaga['descricao'], 0,
                          (strlen($vaga['descricao']) >= 50 ? 50: 
                          strlen($vaga['descricao'])))  ?>


                        <!-- <a href="https://monkeytype.com/" target="_blank" rel="external">Descrição</a> -->

                    </p>
                </div>
            </article>


            <article>
                <div class="icon"><i class="fa fa-3x fa-angellist"></i></div>
                <div class="content">
                    <?php echo '<strong>Nome: </strong>' . $vaga['nome']  ?><br>
                    <p><?php echo '<strong>Tipo: </strong> ' . $vaga['tipo']  ?><br>
                        <?php echo '<strong>Salário: </strong> ' . $vaga['salario']  ?><br>
                        <?php echo  '<strong>Descrição: </strong> ' . $vaga['descricao']  ?>


                        <!-- <a href="https://monkeytype.com/" target="_blank" rel="external">Descrição</a> -->

                    </p>
                </div>
            </article>


            <article>
                <div class="icon"><i class="fa fa-3x fa-angellist"></i></div>
                <div class="content">
                    <?php echo '<strong>Nome: </strong>' . $vaga['nome']  ?><br>
                    <p><?php echo '<strong>Tipo: </strong> ' . $vaga['tipo']  ?><br>
                        <?php echo '<strong>Salário: </strong> ' . $vaga['salario']  ?><br>
                        <?php echo  '<strong>Descrição: </strong> ' . $vaga['descricao']  ?>


                        <!-- <a href="https://monkeytype.com/" target="_blank" rel="external">Descrição</a> -->

                    </p>
                </div>
            </article>


            <article>
                <div class="icon"><i class="fa fa-3x fa-angellist"></i></div>
                <div class="content">
                    <?php echo '<strong>Nome: </strong>' . $vaga['nome']  ?><br>
                    <p><?php echo '<strong>Tipo: </strong> ' . $vaga['tipo']  ?><br>
                        <?php echo '<strong>Salário: </strong> ' . $vaga['salario']  ?><br>
                        <?php echo  '<strong>Descrição: </strong> ' . $vaga['descricao']  ?>


                        <!-- <a href="https://monkeytype.com/" target="_blank" rel="external">Descrição</a> -->

                    </p>
                </div>
            </article>

            <article>
                <div class="icon"><i class="fa fa-3x fa-angellist"></i></div>
                <div class="content">
                    <?php echo '<strong>Nome: </strong>' . $vaga['nome']  ?><br>
                    <p><?php echo '<strong>Tipo: </strong> ' . $vaga['tipo']  ?><br>
                        <?php echo '<strong>Salário: </strong> ' . $vaga['salario']  ?><br>
                        <?php echo  '<strong>Descrição: </strong> ' . $vaga['descricao']  ?>


                        <!-- <a href="https://monkeytype.com/" target="_blank" rel="external">Descrição</a> -->

                    </p>
                </div>
            </article>

            <article>
                <div class="icon"><i class="fa fa-3x fa-angellist"></i></div>
                <div class="content">
                    <?php echo '<strong>Nome: </strong>' . $vaga['nome']  ?><br>
                    <p><?php echo '<strong>Tipo: </strong> ' . $vaga['tipo']  ?><br>
                        <?php echo '<strong>Salário: </strong> ' . $vaga['salario']  ?><br>
                        <?php echo  '<strong>Descrição: </strong> ' . $vaga['descricao']  ?>


                        <!-- <a href="https://monkeytype.com/" target="_blank" rel="external">Descrição</a> -->

                    </p>
                </div>
            </article>

            <article>
                <div class="icon"><i class="fa fa-3x fa-angellist"></i></div>
                <div class="content">
                    <?php echo '<strong>Nome: </strong>' . $vaga['nome']  ?><br>
                    <p><?php echo '<strong>Tipo: </strong> ' . $vaga['tipo']  ?><br>
                        <?php echo '<strong>Salário: </strong> ' . $vaga['salario']  ?><br>
                        <?php echo  '<strong>Descrição: </strong> ' . $vaga['descricao']  ?>


                        <!-- <a href="https://monkeytype.com/" target="_blank" rel="external">Descrição</a> -->

                    </p>
                </div>
            </article>

            <article>
                <div class="icon"><i class="fa fa-3x fa-angellist"></i></div>
                <div class="content">
                    <?php echo '<strong>Nome: </strong>' . $vaga['nome']  ?><br>
                    <p><?php echo '<strong>Tipo: </strong> ' . $vaga['tipo']  ?><br>
                        <?php echo '<strong>Salário: </strong> ' . $vaga['salario']  ?><br>
                        <?php echo  '<strong>Descrição: </strong> ' . $vaga['descricao']  ?>


                        <!-- <a href="https://monkeytype.com/" target="_blank" rel="external">Descrição</a> -->

                    </p>
                </div>
            </article>

            <article>
                <div class="icon"><i class="fa fa-3x fa-angellist"></i></div>
                <div class="content">
                    <?php echo '<strong>Nome: </strong>' . $vaga['nome']  ?><br>
                    <p><?php echo '<strong>Tipo: </strong> ' . $vaga['tipo']  ?><br>
                        <?php echo '<strong>Salário: </strong> ' . $vaga['salario']  ?><br>
                        <?php echo  '<strong>Descrição: </strong> ' . $vaga['descricao']  ?>


                        <!-- <a href="https://monkeytype.com/" target="_blank" rel="external">Descrição</a> -->

                    </p>
                </div>
            </article>

            <article>
                <div class="icon"><i class="fa fa-3x fa-angellist"></i></div>
                <div class="content">
                    <?php echo '<strong>Nome: </strong>' . $vaga['nome']  ?><br>
                    <p><?php echo '<strong>Tipo: </strong> ' . $vaga['tipo']  ?><br>
                        <?php echo '<strong>Salário: </strong> ' . $vaga['salario']  ?><br>
                        <?php echo  '<strong>Descrição: </strong> ' . $vaga['descricao']  ?>


                        <!-- <a href="https://monkeytype.com/" target="_blank" rel="external">Descrição</a> -->

                    </p>
                </div>
            </article>

            <article>
                <div class="icon"><i class="fa fa-3x fa-angellist"></i></div>
                <div class="content">
                    <?php echo '<strong>Nome: </strong>' . $vaga['nome']  ?><br>
                    <p><?php echo '<strong>Tipo: </strong> ' . $vaga['tipo']  ?><br>
                        <?php echo '<strong>Salário: </strong> ' . $vaga['salario']  ?><br>
                        <?php echo  '<strong>Descrição: </strong> ' . $vaga['descricao']  ?>


                        <!-- <a href="https://monkeytype.com/" target="_blank" rel="external">Descrição</a> -->

                    </p>
                </div>
            </article>

            <article>
                <div class="icon"><i class="fa fa-3x fa-angellist"></i></div>
                <div class="content">
                    <?php echo '<strong>Nome: </strong>' . $vaga['nome']  ?><br>
                    <p><?php echo '<strong>Tipo: </strong> ' . $vaga['tipo']  ?><br>
                        <?php echo '<strong>Salário: </strong> ' . $vaga['salario']  ?><br>
                        <?php echo  '<strong>Descrição: </strong> ' . $vaga['descricao']  ?>


                        <!-- <a href="https://monkeytype.com/" target="_blank" rel="external">Descrição</a> -->

                    </p>
                </div>
            </article>

        </div>
    </section>



</body>