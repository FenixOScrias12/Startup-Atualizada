<?php
$email = utf8_encode($_POST['email']);
require_once 'PHPMailer/class.phpmailer.php';
$mail = new PHPMailer(true);

include_once("config.php");
$query = "SELECT senha FROM users WHERE email = '{$email}'";
$result = mysqli_query($conexao, $query);
$senha = $result->fetch_object()->senha;
try {
    # email da aplicação
    $mail->Host = "smtp.gmail.com";
    $mail->Port = "587";
    $mail->SMTPSecure = "tls";
    $mail->SMTPAuth = "true";
    $mail->Username = "fenixstartup12@gmail.com";
    $mail->Password = "ANcaCRlePAya67?";
    $mail->isSMTP(true);
    $mail->CharSet = 'UTF-8';
    # enviar o e-mail
    $mail->setFrom($mail->Username);
    $mail->addAddress($email);
    $mail->Subject = "Recuperar Senha";
    $mail->Body = "Olá! Sua senha é <b>{$senha}</b>.";
    $mail->IsHTML(true);
    $mail->send();
    // retorno com JS
        echo "<script type='text/javascript'>".
                "alert('E-mail enviado com sucesso');".
                "window.location.href = 'recuperar_senha.php'".
            "</script>";
} catch (phpmailerException $e) {
    echo $e->errorMessage(); //Pretty error messages from PHPMailer
} catch (Exception $e) {
    echo $e->getMessage(); //Boring error messages from anything else!
}
?>
