<?php

//FALTA VERIFICAÇÃO SE FOI POSSIVEL REALIZAR VERIFICAÇÃO NO BANCO

include 'conexao.php';
	//recebendo os dados vindos via post do index.php
    $usuario = $_SESSION['usuario'];
    $aula = $_POST['aula'];
    $qualidade = $_POST['qualidade'];
    $descricao = $_POST['descricao'];
    //realiza a consulta no BD, autenticando o usuário e senha
    $consulta = "INSERT INTO relatorio(qualidade, descricao, aula, usuario) VALUES('$qualidade','$descricao','$aula','$usuario')";
    //executando a consulta
    $resultado = $con->query($consulta);

    header("location: home.php");

?>