<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FBSProject</title>
    <link rel = "stylesheet" href="createRelatorio.css">
    <?php
        include 'conexao.php';
        
    ?>
</head>
<body>
    <div class="cardtitle">
        <h1> Como você se sente? </h1>
    </div>
        <div  id="reacao">
            <form action="createRelatorio_script.php" method="POST">
            <label>    
                <input type="radio" id="male" name="qualidade" value="0"> 
                <img src="icones\reacao0.png">
            </label>
            <label>    
                <input type="radio" id="male" name="qualidade" value="1"> 
                <img src="icones\reacao1.png">
            </label>
            <label>    
                <input type="radio" id="male" name="qualidade" value="2"> 
                <img src="icones\reacao2.png">
            </label>
            <label>    
                <input type="radio" id="male" name="qualidade" value="3"> 
                <img src="icones\reacao3.png">
            </label>
            <label>    
                <input type="radio" id="male" name="qualidade" value="4"> 
                <img src="icones\reacao4.png">
            </label><br>

            <div class="caixadisciplina">

            <?php
            $usuario = $_SESSION['usuario'];
            if($_SESSION['tipo'] == 1){ //0 IDLE - 1 ALUNO - 2 PROFESSOR
                $consulta = "SELECT * FROM aluno INNER JOIN aula ON aluno.turma = aula.turma INNER JOIN usuario ON aula.professor = usuario.usuario WHERE aluno.usuario= '$usuario'";
            }else{
                $consulta = "SELECT * FROM aula INNER JOIN professor ON aula.professor = professor.usuario WHERE professor.usuario= '$usuario'";
            }
            
            $res = $con->query($consulta);
            while ($disciplina = $res->fetch_assoc()) {
            ?>
                <label>
                    <input type="radio" id="aula" name="aula" value="<?php echo $disciplina['id']?>">     
                    <div class="disciplina">
                        <h1><?php echo $disciplina['turma'] ?></h1>
                        <p><?php echo $disciplina['disciplina'] ?></p>
                    </div>
                </label>
            <?php
            };
            ?>
            </div>    
                
            <textarea name="descricao" cols="70" rows="15" >
            </textarea>
            <br>
            <button action="submit"style="padding: 10px">
                Enviar
            </button>

            </form>
        </div>
</body>