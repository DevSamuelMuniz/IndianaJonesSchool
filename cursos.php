<?php
$conexao = mysqli_connect('localhost', 'root', '', 'banco_ijs');
$query = "SELECT nome FROM usuarios";
$query1 = "SELECT id, nome FROM cursos";

$result = mysqli_query($conexao, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $nome = $row['nome'];

        $result2 = mysqli_query($conexao, $query1);
        if (mysqli_num_rows($result2) > 0) {
            $cursos = array(); // Array para armazenar os cursos

            while ($row2 = mysqli_fetch_assoc($result2)) {
                $cursos[$row2['id']] = $row2['nome']; // Adicionar o nome do curso ao array usando o ID como chave

            }

            if (count($cursos) > 0) {
                foreach ($cursos as $id => $curso) {
                    
                }
            } else {
                ;
            }
        } else {
            ;
        }
    }
} else {
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
    <link rel="stylesheet" href="cursos.css">
    
    
</head>
<body>


    <div class="img">
        <img class="logo" src="img/logo-removebg-preview.png" alt="logo">        
    </div>

    <div class="titulo">
        <?php
            echo "Bem-Vindo" . $nome . "<br>";
            ?>        
    </div>

    <div class="container">      
        <div class="box">
                <div ><h1 class="cursos">Meus Cursos</h1></div>

            <div class="curso">
            <div class="boxcurso">
                <?php 
                echo "";
                if (count($cursos) > 0) {
                foreach ($cursos as $id => $curso) {
                    echo $id . " - " . $curso . "<br>"; 
                    }}
                    
                    ?>
                </div>    
                <br><br>
         </div>
    </div>
    
    <div>
        <button class="badicionar">
            <a class="adicionar" href="adicionar.php">Adicionar Cursos</a>
        </button>
    </div>
<br>
    <div>
        <button class="badicionar">
            <a class="adicionar" href="remover.php">Remover Cursos</a>
        </button>
    </div>
<br>
    <div>
        <button class="badicionar">
            <a class="adicionar" href="sistema.php">Pagina inicial</a>
        </button>
    </div>





</body>
</html>