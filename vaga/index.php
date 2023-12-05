<meta http-equiv="X-UA-Compatible" content="ie=edge">

<?php
require_once __DIR__ . '/../src/database/conexao.php';
require_once __DIR__ . '/../src/dao/usuariodao.php';
require_once '../auth/validarAcesso.php';
require_once __DIR__ . '/../auth/permissoes.php';



if ($perfil_id == 1) { require_once __DIR__ . '/vagas_admin.php'; }

else if ($perfil_id == 3) { require_once __DIR__ . '/vagas_empresa.php'; }


?>
