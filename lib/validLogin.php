<?php
   if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
   {
      include_once('conexao.php');

      $email = $_POST['email'];
      $senha = $_POST['senha'];

      $sql = "SELECT * FROM usuario WHERE email_usuario = '$email' LIMIT 1";

      $result = $conn->query($sql);
      $usuario = $result->fetch_assoc();

      if(password_verify($senha, $usuario['senha_usuario']))
      {
         if(mysqli_num_rows($result) < 1)
         {
            //unset($_SESSION['email']);//destroi a sessão
            //unset($_SESSION['senha']);
            header('Location: ../login.php?login=erro');
         }
         else
         {
            //$_SESSION['email'] = $email;
            //$_SESSION['senha'] = $senha;
            header('Location: ../adminVagas.php?login=ok');
         }
      } else {
         header('Location: ../login.php?login=erro');
      }
   } else
   {
      header('Location: ../login.php?login=erro');
   }

?>