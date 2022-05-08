<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - EcoPJ </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="" type="image/x-icon">
</head>
<body>
    <div id="login-container">
        <h1>Login</h1>
        <form action="login.php" method="POST">            
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" placeholder="Digite seu e-mail" data-required data-email-validate>
            <label for="password">Senha</label>
            <input type="password" name="password" id="password" placeholder="Digite sua senha" data-required data-password-validate>
            <a href="recuperar_senha.php" id="forgot-pass">Esqueceu a senha?</a>
            <input type="submit" value="Entrar" id="btn-submit">
        </form>

        <div id="register-container">
            <p>Ainda não tem uma conta?</p>
            <a href="registrar.php">Registre-se</a>
        </div>
		<!--<p class="error-validation template"></p>
		<script src="js/script3.js"></script>-->
    </div>
</body>
</html>