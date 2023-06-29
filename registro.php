<?php
    if(isset($_POST['enviar']))
    {
        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $data = $_POST['data'];
        $cpf = $_POST['cpf'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];
        $senha = $_POST['senha'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,data_nasc,cpf,telefone,endereco,senha)
        VALUES ('$nome','$email','$data','$cpf','$telefone','$endereco','$senha')");
       
       header('location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indiana Jones School</title>
    <link rel="shortcut icon" href="img/logo1-removebg-preview.png" type="image/x-icon">
    <link rel="stylesheet" href="registro.css">

<script>
function limitarTexto(elemento, limite) {
  if (elemento.value.length > limite) {
    elemento.value = elemento.value.slice(0, limite);
  }
}
</script>
    
        
  
  
</head>
<body>

    <div class="img">
        <img class="logo" src="img/logo-removebg-preview.png" alt="logo">
    </div>
    <div class="container">
            <h1 class="texto">Registro</h1>
         <form action="registro.php" method="POST">
            <input class="nome" type="text" placeholder="Nome Completo" name="nome" id="nome" >
            <br><br>
            <input class="email" type="email" placeholder="Email" name="email" id="email" >
            <br><br>
            <input class="data" type="date" placeholder="Data de Nascimento" name="data" id="data">
            <br><br>
            <input class="cpf" type="number" maxlength="11" placeholder="CPF" name="cpf" id="cpf" oninput="limitarTexto(this, 11)">
            <br><br>
            <input class="telefone" type="number" maxlength="11" placeholder="Telefone" name="telefone" id="telefone" oninput="limitarTexto(this, 11)">
            <br><br>
            <input class="endereco" type="text" placeholder="Endereço" name="endereco" id="endereco" >
            <br><br>
            <input class="senha" type="password" placeholder="Senha" name="senha" id="senha">
            <br><br>
            <a href="index.php" class="logado" >Já tem login?</a>
            <br><br><br><br>
            <input class="enviar" type="submit" name="enviar" id="enviar"  value="Cadastrar">

            
        </form>
        
    </div>
   

</body>
</html>