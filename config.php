<?php
    /*if($conexao->connect_errno) {
        echo "Erro";
    }else{
        echo "Conexão efetuada com sucesso";
    }*/
    $dbdHost = "Localhost";
    $dbdUsername = "root";
    $dbdPassword = "";
    $dbdName = "ecoPJ_2";

    $conexao = new mysqli( $dbdHost, $dbdUsername,  $dbdPassword,  $dbdName);
?>
    