<?php
include 'conexao.php';
	//recebendo os dados vindos via post do index.php
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    //realiza a consulta no BD, autenticando o usuário e senha
    $consulta = "select * from usuario where usuario='$usuario' and senha='$senha'";
    //executando a consulta
    $resultado = $con->query($consulta);
    //verifica se retornou algum registro com a consulta
if ($resultado->num_rows > 0) {     
    //COLOCA NA VARIAVEL LINHA OS DADOS DA CONSULTA
    $resultlogin = $resultado->fetch_assoc();
    //COLOCA O usuário EM SESSAO
    $_SESSION['usuario'] = $resultlogin['usuario'];
    $_SESSION['nome'] = $resultlogin['nome'];
    $_SESSION['senha'] = $resultlogin['senha'];


    $consulta = "select * from professor where usuario='$usuario";

    $resultado = $con->query($consulta);

    if ($resultado->num_rows > 0) {     //0 IDLE - 1 ALUNO - 2 PROFESSOR
        $_SESSION['tipo'] = 1;
    }else{
        $_SESSION['tipo'] = 2;
    }
    
    //REDIRECCIONA A PAGINA PARA A PAGINA SECRETA
    header("location: home.php");
} else { //se o login não é válido
    //REDIRECIONA PARA A PAGINA INICIAL REPORTANDO O ERRO
    $_SESSION['erro']="Erro";
    header("location: editUser.php");
}