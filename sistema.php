<?php
    $conexao = mysqli_connect('localhost', 'root', '', 'banco_ijs');
    $query = "SELECT nome FROM usuarios";
    $query1 = "SELECT nome FROM cursos"; 
    
    $result = mysqli_query($conexao, $query);
    
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $nome = $row['nome'];
            
            $result2 = mysqli_query($conexao, $query1);
            if (mysqli_num_rows($result2) > 0) {
                while ($row2 = mysqli_fetch_assoc($result2)) {
                    $curso = $row2['nome'];
                    
                }
            } else {
                echo "Você não está matriculado em nenhum curso.";
            }
        }
    }
    else {
        echo "Nenhum resultado encontrado para usuários.";
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
    <link rel="stylesheet" href="sistema.css">
    
    
</head>
<body>


    <div class="img">
        <img class="logo" src="img/logo-removebg-preview.png" alt="logo">        
    </div>

    <div>
        <h1 class="titulo">Bem-Vindo</h1>      
    </div>

    <div class="container">      
        <div>
            <a href="cursos.php">
                <button class="cursos">
                    <h1 class="curso">
                     Meus Cursos
                    </h1>
                </button>  
            </a>
        </div>
        <br><br><br><br>
        <div>
            <a href="dados.php">
                <button class="dados">
                     <h1 class="dado">
                        Alterar Dados Pessoais
                    </h1>
                 </button>
            </a>
        </div>
        <br><br><br><br>
        <div class="butsair">
            <a class="sair" href="index.php">Sair</a>
        </div>
    </div>
</body>
</html>