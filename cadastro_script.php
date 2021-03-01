<?php

//FALTA VERIFICAÇÃO SE FOI POSSIVEL REALIZAR VERIFICAÇÃO NO BANCO

include 'conexao.php';
	//recebendo os dados vindos via post do index.php
    $_SESSION['usuario'] = $_POST['usuario'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $nome = $_POST['nome'];
    //realiza a consulta no BD, autenticando o usuário e senha
    $consulta = "INSERT INTO usuario(nome, usuario, senha) VALUES('$nome','$usuario','$senha')";
    //executando a consulta
    $resultado = $con->query($consulta);
    header("location: selecaoAeP.php");

?>