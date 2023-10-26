<?php

require '../bibliotecas/phpmailer/Exception.php';
require '../bibliotecas/phpmailer/OAuthTokenProvider.php';
require '../bibliotecas/phpmailer/OAuth.php';
require '../bibliotecas/phpmailer/PHPMailer.php';
require '../bibliotecas/phpmailer/POP3.php';
require '../bibliotecas/phpmailer/SMTP.php';

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\PHPMailer;


//print_r($_POST);


class  Mensagem
{

    private $para = null;
    public $status = array('codigo_status' => null, 'descrição_status' => '');


    public function __get($atributo)
    {
        return $this->$atributo;


    }

    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;


    }

    public function mensagemValida()
    {
        // if (empty($_POST['para']) || (empty($_POST['assunto'])) || (empty($_POST['mensagem']))) {header('location: auth.php?auth=erro');}
        if (empty($this->para)) {
            return false;
        }
        return true;
    }
}


$mensagem = new Mensagem();

$mensagem->__set('para', $_POST['para']);
if (!$mensagem->mensagemValida()) {
    echo 'O e-mail inserido não é válido';
    header('location:recuperarSenha.php?auth=erro');
}

require_once __DIR__ . '/../src/database/conexao.php';
require_once __DIR__ . '/../src/dao/usuariodao.php';

$dao = new UsuarioDAO();
$usuario = $dao->processarEnvioEmail('$email');


if ($usuario) {

} else {
    echo 'O e-mail inserido não é válido';
    header('location:recuperarSenha.php?auth=erro2');
}


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = false;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth = true;                                   //Enable SMTP authentication
    $mail->Username = 'pandamandeus@gmail.com';                     //SMTP username
    $mail->Password = 'joto zmxl kkoo tznh';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`  //  use either 25, 587, 2525 or 8025

    //Recipients
    $mail->setFrom('pandamandeus@gmail.com', 'Pandaman Remetente');
    $mail->addAddress($mensagem->__get('para'));     //Add a recipient
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('C:\Users\jorda\OneDrive\Imagens\a\download.jpg');         //Add attachments
    //$mail->addAttachment('C:\Users\jorda\OneDrive\Imagens\a\178670.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = ('Recuperar senha');
    $mail->Body = ('Olá, aqui está o link para você redefinir sua senha: <br> http://localhost/techjobs/auth/alterarSenha.php <br>Boa sorte!');
    $mail->AltBody = 'Olá, aqui está o link para você redefinir sua senha: http://localhost/techjobs/auth/alterarSenha.php. Boa sorte!';
    $mail->send();


    $mensagem->status['codigo_status'] = 1;
    $mensagem->status['descrição_status'] = 'E-mail encontrado no sistema, aguarde o envio do link de redefinição de senha no seu e-mail!';


} catch (Exception $e) {
    //alguma lógica que armazene o erro para posterior análise do programador
    $mensagem->status['codigo_status'] = 2;
    $mensagem->status['descrição_status'] = 'Não foi possível enviar este e-mai! Por favor tente novamente mais tarde. Detalhes do erro: ' . $mail->ErrorInfo;

}

?>

<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8"/>
    <title>Verificação do e-mail</title>
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<div class="container">

    <div class="py-3 text-center">

        <h2>Verificação do e-mail</h2>
    </div>
    <div class="align">
        <div class="row">
            <div class="col col-md-12">
                <?php if ($mensagem->status['codigo_status'] == 1) { ?>
                    <div class="container">
                        <span class="py-3 text-center"><h1 class="display-4 text-success">Sucesso</h1></span>
                        <p class="py-3 text-center"><?php echo $mensagem->status['descrição_status']; ?></p>
                        <img class="d-block mx-auto mb-2"
                             style="border-radius: 10px; margin-top: 20px;"
                             src="../assets/img/l-intro-1653068038.jpg"
                             width="300"
                             height="200"
                             alt="robot">
                        <a href="index.php"
                           class="d-block mx-auto mb-2 btn btn-success btn-lg mt-5 text-white">Voltar</br></a>
                    </div>
                <?php } ?>

                <?php if ($mensagem->status['codigo_status'] == 2) { ?>
                    <div class="container">
                        <h1 class="py-3 text-center display-4 text-danger">Oops</h1>
                        <p class="py-3 text-center"><?php echo $mensagem->status['descrição_status']; ?></p>
                        <img class="d-block mx-auto mb-2"
                             style="border-radius: 10px; margin-top: 20px;"
                             src="../assets/img/ops.jpg"
                             width="300"
                             height="200"
                             alt="robot">
                        <a href="index.php"
                           class="d-block mx-auto mb-2 btn btn-danger btn-lg mt-5 text-white">Voltar</a>
                    </div>

                <?php } ?>

            </div>
        </div>
    </div>

</div>


</body>
</html>








