<?php

    $usuario = "root";
    $senha = "junior2011";
    $servidor = "localhost";
    $db = "DB_FBI";
    
    //funçao usada para ser exibido caracteres acentuados
    header('Content-Type: text/html; charset=utf-8');
    
    $conexao = mysqli_connect($servidor, $usuario, $senha) or die (mysqli_error());
    mysql_select_db($db, $conexao);

    if(!$conexao){
        echo "error database";
    }
    
?>

