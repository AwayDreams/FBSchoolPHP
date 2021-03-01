<?php

//FALTA VERIFICAÇÃO SE FOI POSSIVEL REALIZAR VERIFICAÇÃO NO BANCO

include 'conexao.php';
	//recebendo os dados vindos via post do index.php
    $usuario = $_SESSION['usuario'];
    $cargahoraria = $_POST['cargahoraria'];
    $sobre = $_POST['sobre'];
    //realiza a consulta no BD, autenticando o usuário e senha
    $consulta = "INSERT INTO professor(usuario, cargahoraria, sobre) VALUES('$usuario','$cargahoraria', '$sobre')";
    //executando a consulta
    $resultado = $con->query($consulta);
    $_SESSION["tipo"] = 2;

    header("location: selecaoTurma.php");

?>