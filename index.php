<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indiana Jones School</title>
    <link rel="shortcut icon" href="img/logo1-removebg-preview.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>

    <div class="img">
        <img class="logo" src="img/logo-removebg-preview.png" alt="logo">
    </div>
    <div class="container">
        <form action="testeLogin.php" method="POST">
            <h1 class="texto">Login</h1>
                <input class="input_email" type="email" name="email" id="email" placeholder="Email">
                <br><br>
                <input class="input_senha" type="password" name="senha" id="senha" placeholder="Senha">
                <br><br>
                <a href="registro.php" class="button_cadastro">Cadastre-se</a>
                <br><br><br>
                <input class="button_enviar" type="submit" name="enviar" id="enviar" value="Entrar">

         </form>
    </div>
</body>
</html>