<?php

//FALTA VERIFICAÇÃO SE FOI POSSIVEL REALIZAR VERIFICAÇÃO NO BANCO

include 'conexao.php';
	//recebendo os dados vindos via post do index.php
    $turno = $_POST['turno'];
    $id = $_POST['id'];
    $ano = $_POST['ano'];
    //realiza a consulta no BD, autenticando o usuário e senha
    $consulta = "INSERT INTO turma (id, turno, ano) VALUES('$id','$turno','$ano')";
    //executando a consulta
    $resultado = $con->query($consulta);

    header("location: selecaoTurma.php");

?>