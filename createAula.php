<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FBSProject</title>
    <link rel = "stylesheet" href="createAula.css">
    <?php
        include 'conexao.php';
        
    ?>
</head>
<body>
    <div class="cardtitle">
        <h1> Criando uma nova aula </h1>
    </div>
    <div class="column">
        Professsor:

        <?php 
        
            $usuario = $_SESSION['usuario'];
            $consulta = "SELECT * FROM professor INNER JOIN usuario ON professor.usuario = usuario.usuario WHERE professor.usuario= '$usuario'";
            $res = $con->query($consulta);
            while ($resultado = $res->fetch_assoc()) {
                ?>
                <div class="card">
                    <h1> <?php echo $resultado["nome"] ?></h1>
                    <p> <?php echo  "carga horaria: " . $resultado["cargahoraria"] . " sobre: " .  $resultado["sobre"] ?></p>
                </div>
                <?php
            }
        ?>
        Sala Selecionada:
        <?php
            $turma = $_POST["turma"];
            $usuario = $_SESSION['usuario'];
            $consulta = "SELECT * FROM turma where id = '$turma'";
            $res = $con->query($consulta);
            while ($resultado = $res->fetch_assoc()) {
                ?>
                <div class="card">
                    <h1> <?php echo $resultado["id"] ?></h1>
                    <p> <?php echo  "Turno: " . $resultado["turno"] . " ano: " .  $resultado["ano"] ?></p>
                </div>
                <?php
            }
        
        
        ?>
        Selecione a Disciplina:
        <form action="createAula_script.php" method="post">
            <input type="hidden" name="turma" value="<?php echo $_POST["turma"]?>"> 
            <div class="janela">
            <?php
                $consulta = "SELECT * FROM disciplina;";
                $res = $con->query($consulta);
                while ($resultado = $res->fetch_assoc()) {
                    ?>
                    <label>
                        <input type="radio" id="disciplina" name="disciplina" value="<?php echo $resultado["nome"] ?>" />
                        <div class="card">
                            <h1> <?php echo $resultado["nome"] ?></h1>
                            <p> <?php echo "Carga Horaria: " . $resultado["cargahoraria"] ?></p>
                        </div>
                    </label>
                    <?php
                }
            
            
            ?>
            </div>
        </div>
        <button type="submit"> Concluido </button>
    </form>

</body>