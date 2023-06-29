
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indiana Jones School</title>
    <link rel="shortcut icon" href="img/logo1-removebg-preview.png" type="image/x-icon">
    <link rel="stylesheet" href="adicionar.css">
    
    
</head>
<body>


    <div class="img">
        <img class="logo" src="img/logo-removebg-preview.png" alt="logo">        
    </div>

    <div class="titulo">
        <h1 class="bemvindo">Bem-Vindo</h1>        
    </div>

    <div class="container">      
        <div ><h1 class="cursos">Adicionar Cursos</h1></div>


    <form method="POST">
        <label class="nome" for="nome_curso">Nome do Curso <br></label>
        <input class="box" type="text" name="nome_curso" id="nome_curso" required>
        
        <br> <br>

        <label class="nome" for="professor">Nome do Professor <br></label>
        <input class="box" type="text" name="professor" id="professor" required>
        
        <br><br><br>
        
        <button style="cursor: pointer; "class="button" type="submit" name="adicionar">Adicionar Curso</button>
                   <br><br>
        <button class="button">
            <a class="button" href="sistema.php">Pagina inicial</a>
        </button>
      
    </form>
    <br><br>
       <?php
       
       ?>
<?php
    // Verificar se o formulário foi enviado
    if (isset($_POST['adicionar'])) {
        
        $conexao = mysqli_connect('localhost', 'root', '', 'banco_ijs');
        
        // Verificar se a conexão foi estabelecida com sucesso
        if (mysqli_connect_errno()) {
            echo "Falha ao conectar ao MySQL: " . mysqli_connect_error();
        }
        
        $nome_curso = $_POST['nome_curso'];
        $professor = $_POST['professor'];
        
        // Utilize a função mysqli_real_escape_string para evitar problemas com caracteres especiais
        $nome_curso = mysqli_real_escape_string($conexao, $nome_curso);
        $professor = mysqli_real_escape_string($conexao, $professor);
        
        // Montar a consulta SQL para inserir o curso no banco de dados
        $query = "INSERT INTO cursos (nome, professor, carga, preco) VALUES ('$nome_curso', '$professor', '60 horas', '1300')";
        
        if (mysqli_query($conexao, $query)) {
            echo "Curso adicionado com sucesso!";
        } else {
            echo "Erro ao adicionar o curso: " . mysqli_error($conexao);
        }
        
        mysqli_close($conexao);

        header("location: cursos.php");
    }
?>
            
    
</body>
</html>