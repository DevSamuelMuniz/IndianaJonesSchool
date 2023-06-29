<?php
require_once('config.php');

// Obtém as informações pessoais do banco de dados (exemplo)
$query = "SELECT nome, email, data_nasc, cpf, telefone, endereco, senha FROM usuarios ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conexao, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    // Armazena as informações pessoais em variáveis
    $nome = $row['nome'];
    $email = $row['email'];
    $dataNascimento = $row['data_nasc'];
    $cpf = $row['cpf'];
    $telefone = $row['telefone'];
    $endereco = $row['endereco'];
    $senha = $row['senha'];
} else {
    // Tratar caso não encontre informações pessoais para o usuário
    $nome = "";
    $email = "";
    $dataNascimento = "";
    $cpf = "";
    $telefone = "";
    $endereco = "";
    $senha = "";
}

mysqli_close($conexao);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indiana Jones School</title>
    <link rel="shortcut icon" href="img/logo1-removebg-preview.png" type="image/x-icon">
    <link rel="stylesheet" href="alterar.css">
    
    
</head>
<body>


    <div class="img">
        <img class="logo" src="img/logo-removebg-preview.png" alt="logo">        
    </div>

   
    

    <div class="container">    
        <h1 style="font-size:23px;">Informações Pessoais:</h1>  <br>
       <div class="info">
       <h1>Nome: <?php echo $nome; ?></h1>
        <h1>Email: <?php echo $email; ?></h1>
        <h1>Data de nascimento: <?php echo $dataNascimento; ?></h1>
        <h1>CPF: <?php echo $cpf; ?></h1>
        <h1>Telefone: <?php echo $telefone; ?></h1>
        <h1>Endereço: <?php echo $endereco; ?></h1>
        <h1>Senha: <?php echo $senha; ?></h1>
        </div>
        <br><br><br>
        <div class="butsair">
            <a class="sairr" href="alterar.php">Alterar Dados</a>
        </div>
        <br><br><br>
        <div class="butsair">
            <a class="sair" href="index.php">Sair</a>
        </div>
    </div>
</body>
</html>