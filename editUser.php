<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FBSProject</title>
    <link rel = "stylesheet" href="editUser.css">
    <?php
        include 'conexao.php';
        
    ?>
</head>
<body>
    <div class="cardtitle">
        <h1> Editar Usuario </h1>
    </div>
        <div class="divprincipal">
            <img src="icones\4.png" alt="perfil">
            <?php
            $usuario = $_SESSION['usuario'];
            $consulta = "SELECT * FROM usuario WHERE usuario = '$usuario'";
            $res = $con->query($consulta);
            $resultado = $res->fetch_assoc();
            
            ?>
            <form action="editUser_script.php" method="POST">
                <div>
                    <p> Nome: </p>
                    <input type="text" name="nome" label="Nome" value= <?php echo $resultado["nome"] ?>>
                </div>
                <div>
                    <p> Senha: </p>
                    <input type="text" name="senha" label="Nome" value= <?php echo $resultado["senha"] ?>>
                </div>
                <button type="submit" style="padding: 5px; margin: 5px">
                    Concluido
                </button>
            </form>
        </div>
</body>