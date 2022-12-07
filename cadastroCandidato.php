<?php

  if(isset($_POST['submit']))
  {
   include_once("lib/conexao.php");

   $nome = $_POST['nome'];
   $email = $_POST['email'];
   $telefone = $_POST['telefone'];
   $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
   $cidade = $_POST['cidade'];
   $estado = $_POST['estado'];

   $result = mysqli_query($conn, "INSERT INTO usuario(nome_usuario, email_usuario, senha_usuario, telefone_usuario, cidade, estado) VALUES ('$nome','$email','$senha','$telefone','$cidade','$estado')");
   
   header('Location: login.php');
  }

  
  
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>DevJobs - Cadastro</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="CodedThemes">
    <meta name="keywords" content=" Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="CodedThemes">
    <!-- Required Fremwork -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/cadastroCandidato.css">
    <link rel="shortcut icon" href="img/icone.ico" type="image/x-icon">
</head>

<body>
   <div id="esquerda">
      <a href="index.php"><img src="img/logobranca.png" alt="" width="212px" height="73px"></a>
      <ul>
         <li><img src="img/check.png" alt="" width="30px" height="30px">Melhores vagas do pais</li>
         <li><img src="img/check.png" alt="" width="30px" height="30px">As melhores empresas tech</li>
         <li><img src="img/check.png" alt="" width="30px" height="30px">Vagas em todas as linguagens</li>
      </ul>
   </div>

   <div id="direita">
      <div class="form">
         <form action="cadastroCandidato.php" method="POST">
            <h1>Cadastro Candidato</h1>
            <input name="nome" type="text" placeholder="nome" required>
            <input name="email" class="email" type="email" placeholder="email" required>
            <input name="telefone" type="text" placeholder="telefone" required>
            <input name="senha" type="password" placeholder="senha" required>
            <input type="password" placeholder="confirmar senha" required>
            <input name="cidade" type="text" placeholder="cidade" required>
            <input name="estado" type="text" placeholder="estado" required>
            <button name="submit" type="submit">Efetuar Cadastro</button>
            <p>Ainda não possui uma conta? <a href="login.php">Efetuar login</a>.</p>
         </form>
      </div>
   </div>

   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>