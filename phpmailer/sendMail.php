<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'config\env.php';
require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

$mail = new PHPMailer(true);


// Configuração do SMTP
$mail->isSMTP();
$mail->Host       = 'smtp.gmail.com';
$mail->SMTPAuth   = true;
$mail->Username   = $_ENV['MAILUSERNAME'];
$mail->Password   = $_ENV['MAILPASSWORD'];
$mail->SMTPSecure = 'ssl';
$mail->Port       = 465;

// Destinatário




if(isset($_POST['enviar'])){
    try {
        // Remetente
        $mail->setFrom(
           $mail->Username,
           'Meu portfolio'
        );

        $mail->addAddress(
            $mail->Username
        );

        // Endereço para resposta
        $mail->addReplyTo(
            $_POST['email'],
            $_POST['nome']
        );

        // Conteúdo do e-mail
        $mail->isHTML(true);
        $mail->Subject = 'Mensagem portfolio';
        $mail->Body    =  $_POST['mensagem'];

        // Envia
        $mail->send();

        echo 'Mensagem enviada com sucesso!';
    }catch (Exception $e) {

        echo 'Erro ao enviar a mensagem: ' . $mail->ErrorInfo;
    }   
}

?>
