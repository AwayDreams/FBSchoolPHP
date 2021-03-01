<?php
    //startou a session aqui para não ter que ficar fazendo isso
    //em todas as páginas php que precisam da session
    session_start();
    //parâmetros de acesso ao BD
    $servidor = "localhost:3306";
    $usuario = "root";
    $senha = "37501";
    $nomeBD = "projeto";
    $con = new mysqli($servidor, $usuario, $senha, $nomeBD);
?>
