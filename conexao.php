<?php
    $hostname = "localhost";
    $bancodedados = "clientes";
    $usuario = "root";
    $senha = "@Halo1994";

    $mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
    if ($mysqli->connect_errno) {
        echo "falaha ao conectar:(" . $mysqli->connect_errno . ")" . $mysqli->connect_errno;
    }
    else
        echo "Conectado ao Banco de Dados";




?>