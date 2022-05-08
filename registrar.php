<?php
    if(isset($_POST['submit'])){
        /*print_r($_POST['name']);
        print_r($_POST['lastname']);
        print_r($_POST['password']);*/

        include_once("config.php");

        $email = $_POST['email'];
        $nome = $_POST['name'];
        $sobrenome = $_POST['lastname'];
        $senha = $_POST['password'];

        $result = mysqli_query($conexao, "INSERT INTO users(email, nome, sobrenome, senha) 
        VALUES('$email', '$nome', '$sobrenome', '$senha')");

        // retorno com JS
        echo "<script type='text/javascript'>".
                "alert('Registro feito com sucesso');".
                "window.location.href = 'registrar.php'".
            "</script>";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registre-se - EcoPJ</title>
    <link rel="stylesheet" href="css/style2.css">
    <link rel="shortcut icon" href="" type="image/x-icon">
</head>
<body>
    <div id="main-container">
        <h1>Registre-se para acessar o EcoPJ</h1>
        <form action="registrar.php" method="POST" id="register-container">
            <div class="full-box"> <!-- ocupa toda a largura do container -->
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" placeholder="Digite seu melhor e-mail" data-min-length="3" data-required data-email-validate>
          </div> 
          <div class="half-box spacing"> <!-- ocupa a metade da largura do container -->
            <label for="name">Nome</label>
            <input type="text" name="name" id="name" placeholder="Digite seu nome" data-max-length="16" data-only-letters data-required>
          </div>
          <div class="half-box">
              <label for="lastname">Sobrenome</label>
              <input type="text" name="lastname" id="lastname" placeholder="Digite seu sobrenome" data-max-length="16" data-only-letters data-required>
          </div>
          <div class="half-box spacing">
              <label for="password">Senha</label>
              <input type="password" name="password" id="password" placeholder="Digite sua senha" data-required data-password-validate>
          </div>
          <div class="half-box">
            <label for="passconfirmation">Confirmação de senha</label>
            <input type="password" name="passconfirmation" id="passconfirmation" placeholder="Confirme sua senha" data-equal="password" data-required>
        </div>
        <div class="full-box">
            <input type="checkbox" name="agreement" id="agreement">
            <label for="agreement" id="agreement-label">Eu li e aceito os <a href="#">termos de uso</a></label>
        </div>
        <div class="full-box">
            <input type="submit" id="btn-submit" name="submit" submit value="Registrar">
        </div>
        </form>
    </div>
</body>
</html>
