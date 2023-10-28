<?php

require 'src/dao/vagadao.php';


$dao = new VagaDAO();
$resultados = $dao->getByVaga('$nome');


echo  '<h2>Resultado da busca</h2>';

if (count($resultados)) {
    foreach ($resultados as $Resultado) {

        echo $Resultado['id'] .  $Resultado['nome'];
    }
} else {
    echo 'Não foram encontrados resultados pelo termo buscado.';
}
