<?php

//FALTA VERIFICAÇÃO SE FOI POSSIVEL REALIZAR VERIFICAÇÃO NO BANCO

include 'conexao.php';
	//recebendo os dados vindos via post do index.php
    
    //realiza a consulta no BD, autenticando o usuário e senha
    $usuario = $_SESSION["usuario"];
    $turma = $_POST["turma"];
    $ra = $_POST["ra"];
    $consulta = "UPDATE aluno SET turma='$turma' WHERE usuario = '$usuario'";
    $resultado = $con->query($consulta);
    header("location: home.php");

        

    