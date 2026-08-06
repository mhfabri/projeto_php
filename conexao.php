<?php
    // conexao.php
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "sistema_produtos";


    $conexao = mysqli_connect($host, $usuario, $senha, $banco);

    if ($conexao){
        echo ("conectado");
    }else{
        echo ("ao conectar: ". mysqli_connect_error());
    }
?>