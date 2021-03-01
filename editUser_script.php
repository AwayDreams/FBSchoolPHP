<?php

//FALTA VERIFICAÇÃO SE FOI POSSIVEL REALIZAR VERIFICAÇÃO NO BANCO

include 'conexao.php';
	//recebendo os dados vindos via post do index.php
    $usuario = $_SESSION['usuario'];
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    //realiza a consulta no BD, autenticando o usuário e senha
    $consulta = "UPDATE usuario SET nome ='${nome}', senha='${senha}' WHERE usuario = '${usuario}'";
    //executando a consulta
    $resultado = $con->query($consulta);
    header("location: home.php");
?>