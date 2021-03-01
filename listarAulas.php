<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FBSProject</title>
    <link rel = "stylesheet" href="listarAulas.css">
    <?php
        include 'conexao.php';
        
    ?>
</head>
<body>
    <div class="cardtitle">
        <h1> Aulas Disponíveis </h1>
    </div>
        <div class="switch__container"> 
            <input id="switch-shadow" class="switch switch--shadow" type="checkbox">
            <label for="switch-shadow"></label><h1>Filtrar minhas aulas</h1>
            <br>
        </div>
        <div class="caixa">
            <?php 
                $consulta = "SELECT * FROM aula";
                $res = $con->query($consulta);
                while ($aula = $res->fetch_assoc()) {
                    ?>
                    <div class="card">
                        <h1> Disciplina: <?php echo $aula["disciplina"] ?> </h1>
                        <h1> Professor: <?php echo $aula["professor"] ?> </h1>
                        <p> Turma: <?php echo $aula["turma"] ?> </p>
                        
                    </div>
                <?php
                }
             ?>
        </div>
</body>