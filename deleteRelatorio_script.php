<?php

//FALTA VERIFICAÇÃO SE FOI POSSIVEL REALIZAR VERIFICAÇÃO NO BANCO

include 'conexao.php';
	//recebendo os dados vindos via post do index.php
    $relatorio = $_POST['relatorio'];
    //realiza a consulta no BD, autenticando o usuário e senha
    $consulta = "DELETE FROM relatorio WHERE id= '$relatorio'";
    //executando a consulta
    $resultado = $con->query($consulta);
    header("location: home.php");

?>