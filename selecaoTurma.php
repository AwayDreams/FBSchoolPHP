<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FBSProject</title>
    <link rel = "stylesheet" href="createComentario.css">
    <?php
        include 'conexao.php';
        
    ?>
</head>
<body>
    <div class="cardtitle">
        <h1> Seleção Turma </h1>
    </div>
        <div class="caixa">
            <?php 
                $relatorio = "23";
                $consulta = "SELECT * FROM turma";
                $res = $con->query($consulta);
                while ($turma = $res->fetch_assoc()) {
                    ?>
                    <form action="<?php if($_SESSION["tipo"] == 2){ echo "createAula.php"; }else{echo "selecaoTurma_script.php";}?>" method="post">
                        <label>
                            <input type="hidden" name="turma" value="<?php echo $turma["id"]?>" visible="false">
                            <button type="submit">
                                <div class="card">
                                    <h1> <?php echo $turma["id"] ?> </h1>
                                    <p> <?php echo $turma["turno"] ?> </p>
                                </div>
                            </button>
                        </label>
                    </form>
                <?php
                }
             ?>
        </div>

        <?php
        if($_SESSION["tipo"] ==  2){
            ?>
            <a href="createTurma.php">
            <button class="button">Criar Turma</button>
            </a>
            <?php
        }
        ?>
</body>