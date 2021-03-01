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
        <h1> Informações adicionais de Aluno </h1>
    </div>
        <div class="divprincipal">
            <img src="icones\4.png" alt="perfil">
            <form action="createAluno_script.php" method="POST">
                <div>
                    <p> RA: </p>
                    <input type="text" name="ra">
                </div>
                <button type="submit" style="padding: 5px; margin: 5px">
                    Concluido
                </button>
            </form>
        </div>
</body>