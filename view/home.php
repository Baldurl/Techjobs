<?php
require_once __DIR__ . '/../src/database/conexao.php';
require_once __DIR__ . '/../src/dao/usuariodao.php';
require_once '../auth/validarAcesso.php';
require_once __DIR__ . '/../auth/permissoes.php';


if ($perfil_id == 1) { require_once __DIR__ . '/admin.php'; }

    else if ($perfil_id == 2) {require_once __DIR__ . '/candidato.php'; }

         else if ($perfil_id == 3) { require_once __DIR__ . '/empresa.php'; }


?>
