<?php
session_start();
require_once __DIR__ . '/../layouts/headerLogin.php';
require_once __DIR__ . '/../src/dao/usuario_has_vagadao.php';
require_once __DIR__ . '/../src/dao/usuariodao.php';
require_once __DIR__ . '/../src/dao/vagadao.php';
// require_once __DIR__ . '/processa_envio.php';

const UPLOAD_DIR = __DIR__ . "/../assets/img/";


$usuario_id = $_SESSION['usuario']['id'];
$dao = new UsuarioDAO();
$usuario = $dao->getById($usuario_id);


$vaga_id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
$dao = new VagaDAO();
$vaga = $dao->getById($vaga_id);


if (isset($_FILES['arquivo'])) {
    $arquivo = $_FILES['arquivo'];

    $pasta = "../assets/img/";
    $nomeDoArquivo = $arquivo['name'];
    $novoNomeDoArquivo = uniqid();
    $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));

    if ($extensao != 'pdf') {
        echo "Tipo de arquivo não aceito";
    }

    $deu_certo = move_uploaded_file($arquivo['tmp_name'], $pasta . $novoNomeDoArquivo . "." . $extensao);
    if ($deu_certo){
        $dao = new UsuarioDAO();
        $resultado = $dao->enviarCurriculo($nomeDoArquivo, $usuario_id);
        echo "<p>Arquivo enviado com sucesso</p>";
    } else {
        echo "<p>Falha ao enviar arquivo</p>";
    }
}


try {
    $dao = new Usuario_has_vagaDAO();
    $candidatado = $dao->candidatar($usuario_id, $vaga_id);
    header('location: ../vaga/candidatar.php?id=' . $vaga_id . '&candidatar=sucesso');

} catch (\PDOException $e) {
    header('location: ../vaga/candidatar.php?id=' . $vaga_id . '&candidatar=erro2');


    ?>

    <a href="../view/home.php">
        <button type="button" class="btn btn-primary btn-orange ">
            Voltar
        </button>
    </a>
<?php } ?>








