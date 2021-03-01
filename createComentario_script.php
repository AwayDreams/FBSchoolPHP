<?php

//FALTA VERIFICAÇÃO SE FOI POSSIVEL REALIZAR VERIFICAÇÃO NO BANCO

include 'conexao.php';
	//recebendo os dados vindos via post do index.php
    $creator = $_SESSION['usuario'];
    $conteudo = $_POST['comentario'];
    $relatorio = $_POST['relatorio'];
    //realiza a consulta no BD, autenticando o usuário e senha
    $consulta = "INSERT INTO comentario(creator, conteudo, relatorio) VALUES('${creator}','${conteudo}','${relatorio}')";
    //executando a consulta
    $resultado = $con->query($consulta);

    header("location: createComentario.php?relatorio=". $relatorio);

?>