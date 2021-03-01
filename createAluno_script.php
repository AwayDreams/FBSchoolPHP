<?php

//FALTA VERIFICAÇÃO SE FOI POSSIVEL REALIZAR VERIFICAÇÃO NO BANCO

include 'conexao.php';
	//recebendo os dados vindos via post do index.php
    $usuario = $_SESSION['usuario'];
    $ra = $_POST['ra'];
    //realiza a consulta no BD, autenticando o usuário e senha
    $consulta = "INSERT INTO aluno(usuario, ra) VALUES('$usuario','$ra')";
    //executando a consulta
    $resultado = $con->query($consulta);
    $_SESSION["tipo"] = 1;
    header("location: selecaoTurma.php");

?>