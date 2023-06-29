<?php
    /*print_r($_REQUEST);*/

   if(isset($_POST['enviar']) && !empty($_POST['email']) && !empty($_POST['senha']))
   {
        //acessa

        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

       /* print_r('Email: ' . $email);
        print_r('<br>');
        print_r('Senha: ' . $senha);*/
        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha' ";
        $result = $conexao->query($sql);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('location: index.php');
        }
        else
        {
            header('location: sistema.php');
        }
   }
   else
   {
        //não acessa
        header('Location: index.php');
   }

?>