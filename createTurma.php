<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FBSProject</title>
    <link rel = "stylesheet" href="createTurma.css">
    <?php
        include 'conexao.php';
        
    ?>
</head>
<body>
    <div class="cardtitle">
        <h1> Editar Usuario </h1>
    </div>
        <div class="divprincipal">
            <form action="editUser_script.php" method="POST">
                <div>
                    <label>
                        Manha
                        <input type="radio" name="turno" value="manha">
                    </label>
                    <label>
                        Tarde
                        <input type="radio" name="turno" value="tarde">
                    </label>
                    <label>
                        Noite
                        <input type="radio" name="turno" value="noite">
                    </label>
                </div>
            
                <div>
                    <p> ID: </p>
                    <input type="text" name="id">
                </div>
                <div>
                    <p> Ano: </p>
                    <input type="text" name="ano">
                </div>
                <button type="submit" style="padding: 5px; margin: 5px">
                    Concluido
                </button>
            </form>
        </div>
</body>