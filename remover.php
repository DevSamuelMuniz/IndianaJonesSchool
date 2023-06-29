
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indiana Jones School</title>
    <link rel="shortcut icon" href="img/logo1-removebg-preview.png" type="image/x-icon">
    <link rel="stylesheet" href="remover.css">
    
    
</head>
<body>


    <div class="img">
        <img class="logo" src="img/logo-removebg-preview.png" alt="logo">        
    </div>

    <div class="titulo">
        <h1 class="bemvindo">Bem-Vindo</h1>        
    </div>

    <div class="container">      
        <div ><h1 class="cursos">Remover Cursos</h1></div>


    <form method="POST">
        <h1 style="font-size: 15px;">Selecione o ID do seu curso</h1>
        <br>
        <input class="box" type="number" name="curso_id" value="ID">
        <br><br><br>
        <button class="button "type="submit" name="remover">Remover Curso</button>
    </form>
        
        <br>
        
        <button class="button">
            <a class="button" href="sistema.php">Pagina inicial</a>
        </button>
      
    </form>
    <br><br>
       <?php
       
       ?>
<?php
    // Verificar se o formulário foi enviado
    if (isset($_POST['remover'])) {
        
        $conexao = mysqli_connect('localhost', 'root', '', 'banco_ijs');
        
        // Verificar se a conexão foi estabelecida com sucesso
        if (mysqli_connect_errno()) {
            echo "Falha ao conectar ao MySQL: " . mysqli_connect_error();
        }
        
        $curso_id = $_POST['curso_id'];
        
        // Utilize a função mysqli_real_escape_string para evitar problemas com caracteres especiais
        $curso_id = mysqli_real_escape_string($conexao, $curso_id);
        
        // Montar a consulta SQL para remover o curso do banco de dados
        $query = "DELETE FROM cursos WHERE id = '$curso_id'";
        
        if (mysqli_query($conexao, $query)) {
            echo "Curso removido com sucesso!";
        } else {
            echo "Erro ao remover o curso: " . mysqli_error($conexao);
        }
        
        mysqli_close($conexao);
        
        header("location: cursos.php");
    }
?>
            
    
</body>
</html>