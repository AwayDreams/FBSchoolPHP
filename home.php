<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FBSProject</title>
    <link rel = "stylesheet" href="home.css">
    <?php
        include 'conexao.php';
        
    ?>
</head>
<body>
    <div class="cardtitle">
        <h1> Bem - Vindo ao FBSProject</h1>
    </div>
    <div class="secaoglobal">
        <div class="secaoesquerda">
            <?php
                $usuario = $_SESSION['usuario'];
                if($_SESSION["tipo"] == 1){
                    $consulta = "SELECT relatorio.id, relatorio.qualidade, relatorio.descricao, relatorio.aula, usuario.usuario, usuario.nome, aula.turma, aula.disciplina, aula.professor  FROM relatorio INNER JOIN usuario ON relatorio.usuario = usuario.usuario INNER JOIN aula ON relatorio.aula = aula.id INNER JOIN aluno ON aluno.turma = aula.turma WHERE aluno.usuario= '$usuario'";
                }else{
                    $consulta = "SELECT relatorio.id, relatorio.qualidade, relatorio.descricao, relatorio.usuario, usuario.nome, aula.disciplina, aula.professor FROM relatorio INNER JOIN usuario ON relatorio.usuario = usuario.usuario INNER JOIN aula ON relatorio.aula = aula.id WHERE aula.professor = '$usuario'";
                }
                $res = $con->query($consulta);
                while ($relatorio = $res->fetch_assoc()) {
                ?>
                    <!-- fecha o php -->
                    <a href="<?php echo "createComentario.php?relatorio=" . $relatorio["id"]  ?>">
                        <div class="card">  
                            <h1> <?php  echo $relatorio["nome"]; ?> </h1>
                            <p> <?php echo $relatorio["descricao"]; ?> </p>    
                            <img src="<?php echo "icones\\reacao" . $relatorio["qualidade"] . ".png" ?>">
                        </div>
                    </a>
                <?php
                };
            ?>
        </div>
        <div class="secaodireita">
            <div class="botao">
                <a href="selecaoTurma.php">
                    <img src="icones\3.png" alt="icone 1" width="50" height="50"></img>
                </a>
            </div>
            <div class="botao">
                <a href="createRelatorio.php">
                    <img src="icones\2.png" alt="icone 1" width="50" height="50"></img>
                </a>
            </div>
            <div class="botao">
                <a href="edituser.php">
                    <img src="icones\1.png" alt="icone 1" width="50" height="50"></img>
                </a>
            </div>
        </div>
    </div>
</body>