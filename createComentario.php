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
        <h1> Seção de Comentarios </h1>
        <?php
        $relatorio = $_GET["relatorio"];
        $consulta = "SELECT * FROM relatorio WHERE id= '$relatorio'";
        $res = $con->query($consulta);
        while ($resultado = $res->fetch_assoc()) {
            if($resultado["usuario"] == $_SESSION["usuario"]){
                ?>  <form action="deleteRelatorio_script.php" method="POST">
                    <input type="hidden" name="relatorio" value=<?php echo $_GET["relatorio"]; ?>>
                        <button type="submit">
                            <img src="icones\lixeira.png" alt="deletar">
                        </button>
                    </form>
                <?php
            }
        }
        
        ?>
    </div>
        <?php
            $relatorio = $_GET["relatorio"];
            $consulta = "SELECT * FROM relatorio WHERE id= '$relatorio'";
            $res = $con->query($consulta); 
            while ($resultado = $res->fetch_assoc()) {
                ?>
                <div  class="caixa">
                    <p> <?php echo $resultado["descricao"]?></p>
                    <br/>
                    <img src="<?php echo "icones\\reacao" . $resultado["qualidade"] . ".png"?>" alt="imagem nao carregou">
                </div>
                <?php
                } 
                ?>
        <form action="createComentario_script.php" method="POST">
            <input type="text" name="comentario" class="input">
            <input type='hidden' name='relatorio' value='<?php echo $_GET["relatorio"] ?>'>
            <button type="submit" class="button"> Enviar </button>       
        </form>

        <div class="caixa">
            <?php 
                $relatorio = $_GET["relatorio"];
                $consulta = "SELECT * FROM comentario WHERE relatorio= '$relatorio'";
                $res = $con->query($consulta);
                while ($comentario = $res->fetch_assoc()) {
                    ?>
                    <div class="card">
                        <h1> <?php echo $comentario["creator"] ?> </h1>
                        <p> <?php echo $comentario["conteudo"] ?> </p>
                    </div>
                <?php
                }
             ?>
        </div>
</body>