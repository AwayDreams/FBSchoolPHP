<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FBSProject</title>

    <link rel="stylesheet" href="formato.css">

</head>
<body>
    <form class = "form" action="loginscript.php" method = "POST">
        <div class="card">
            <div class="card-top">
                <img class="imglogin" src="usuario.png" alt="">
                <h2 class="title">Acesso ao FBSProject</h2>
                <p>Login</p>
            </div>
            
            <div class="card-group">
                <label>Usuário</label>
                <input type="text" name="usuario" placeholder="Digite seu Usuário" required>
            </div>

            <div class="card-group">
                <label>Senha</label>
                <input type="password" name="senha" placeholder="Digite sua Senha" required>
            </div>

            <div class="card-group">
                <label><input type="checkbox">Lembre-me</label>
            </div>
            
            <div class="card-group btn">
                <button type="submit">Acessar</button>
            </div>

            <div class="card-group">
                <a href="cadastro.php"> Novo Usuário</a>
            </div>
          
        </div>
    </form>
    
</body>
</html>