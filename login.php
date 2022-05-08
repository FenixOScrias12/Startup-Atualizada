<?php
    include_once('config.php');
    if(empty($_POST['email']) || empty($_POST['password'])){
        header('Location: index.php');
        exit();
    }
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "select codigo, email from users where email = '{$email}' and senha = '{$password}'";
    $result = mysqli_query($conexao, $query);
    $row = mysqli_num_rows($result);
    
    if ($row == 1){
        header('Location: ecoPJ/index.html');
        exit();
    }
    else{   
        // retorno com JS
        echo "<script type='text/javascript'>".
                "alert('Login inválido');".
                "window.location.href = 'index.php'".
            "</script>";
    }
?>