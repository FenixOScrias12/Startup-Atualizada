<?php
    $nome = utf8_encode($_POST['nomeCompleto']);
    $email = utf8_encode($_POST['email']);
    $mensagem = utf8_encode($_POST['mensagem']);
    require_once 'PHPMailer/class.phpmailer.php';
    $mail = new PHPMailer(true);

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
        $mail->addAddress($mail->Username);
        $mail->Subject = "Contato feito por {$nome} com o e-mail {$email} - Impatec Startup";
        $mail->Body = $mensagem;
        $mail->IsHTML(true);
        $mail->send();
        // retorno com JS
        echo "<script type='text/javascript'>".
                "alert('E-mail enviado com sucesso');".
                "window.location.href = 'contato.html'".
            "</script>";
    } catch (phpmailerException $e) {
        echo $e->errorMessage(); //Pretty error messages from PHPMailer
    } catch (Exception $e) {
        echo $e->getMessage(); //Boring error messages from anything else!
    }
?>