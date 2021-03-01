<?php

//FALTA VERIFICAÇÃO SE FOI POSSIVEL REALIZAR VERIFICAÇÃO NO BANCO

include 'conexao.php';
	//recebendo os dados vindos via post do index.php
    $usuario = $_SESSION['usuario'];
    $turma = $_POST['turma'];
    $disciplina = $_POST['disciplina'];
    //realiza a consulta no BD, autenticando o usuário e senha
    $consulta = "INSERT INTO aula (turma, disciplina, professor) VALUES('$turma','$disciplina', '$usuario')";
    //executando a consulta
    $resultado = $con->query($consulta);
    header("location: home.php");
?>