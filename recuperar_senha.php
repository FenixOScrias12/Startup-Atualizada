<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar senha - EcoPJ </title>
    <link rel="stylesheet" href="css/style3.css">
    <link rel="shortcut icon" href="" type="x/image-icon">
</head>
<body>
    <div id="regain-container">
        <h1>Esqueceu sua senha?</h1>
        <p>Enviaremos um e-mail com instruções de como redefinir sua senha.</p>
        <form action="enviar_email.php" method="POST">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" placeholder="Digite seu e-mail" data-required data-min-length="3" data-email-validate>
            <input type="submit" value="Enviar" id="btn-submit">
        </form>
    </div>  
</body>
</html>

