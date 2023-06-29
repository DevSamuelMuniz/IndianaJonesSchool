<?php
require_once('config.php');

// Obtém as informações pessoais do banco de dados
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

// Verificar se o formulário foi enviado
if (isset($_POST['atualizar'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $dataNascimento = $_POST['data_nasc'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $senha = $_POST['senha'];

    // Atualizar os dados no banco de dados
    $query = "UPDATE usuarios SET nome = '$nome', email = '$email', data_nasc = '$dataNascimento', cpf = '$cpf', telefone = '$telefone', endereco = '$endereco', senha = '$senha' ORDER BY id DESC LIMIT 1";

    if (mysqli_query($conexao, $query)) {
        echo "Dados atualizados com sucesso!";
    } else {
        echo "Erro ao atualizar os dados: " . mysqli_error($conexao);
    }
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
        <form method="POST">
            <label class="nome" for="nome">Nome</label><br>
            <input class="box" type="text" id="nome" name="nome" value="<?php echo $nome; ?>"><br><br>

            <label class="nome" for="email">Email</label><br>
            <input class="box" type="email" id="email" name="email" value="<?php echo $email; ?>"><br><br>

            <label class="nome" for="data_nasc">Data de Nascimento</label><br>
            <input class="box" type="date" id="data_nasc" name="data_nasc" value="<?php echo $dataNascimento; ?>"><br><br>

            <label class="nome"for="cpf">CPF</label><br>
            <input class="box" type="text" id="cpf" name="cpf" value="<?php echo $cpf; ?>"><br><br>

            <label class="nome" for="telefone">Telefone</label><br>
            <input class="box" type="text" id="telefone" name="telefone" value="<?php echo $telefone; ?>"><br><br>

            <label class="nome" for="endereco">Endereço</label><br>
            <input class="box" type="text" id="endereco" name="endereco" value="<?php echo $endereco; ?>"><br><br>

            <label class="nome"  for="senha">Senha</label><br>
            <input class="box" type="password" id="senha" name="senha" value="<?php echo $senha; ?>"><br>
            <br><br><br>

            <input class="sairr" type="submit" name="atualizar" value="Alterar Dados">
        </form>
        </div>
        
        <br><br>
        
        <div class="butsair">
            <a class="sair" href="sistema.php">Voltar</a> <br><br>
        </div>
        <br><br><br>
        <div class="butsair">
            <a class="sair" href="index.php">Sair</a>
        </div>
    </div>
</body>
</html>
