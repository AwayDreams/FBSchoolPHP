<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FBSProject</title>

    <link rel="stylesheet" href="formato.css">

</head>
<body>
    <form class = "form" action="cadastro_script.php" method="POST">
        <div class="card">
            <div class="card-top">
                <h2 class="title">Bem Vindo ao FBSProject</h2>
                <p>Cadastro</p>
            </div>

            <div class="card-group">
                <label>Nome (visível para todos)</label>
                <input type="text" name="nome" placeholder="Digite seu nome" required>
            </div>

            <div class="card-group">
                <label>Usuário</label>
                <input type="text" name="usuario" placeholder="Digite seu Usuário" required>
            </div>

            <div class="card-group">
                <label>Senha</label>
                <input type="password" name="senha" placeholder="Digite sua Senha" required>
            </div>

            
            <div class="card-group btn">
                <button type="submit">Continuar</button>
            </div>
                     
        </div>
    </form>
    
</body>
</html>