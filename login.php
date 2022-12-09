<?php
include('lib/conexao.php');
session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>DevJobs - Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="CodedThemes">
    <meta name="keywords" content=" Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="CodedThemes">
    <!-- Required Fremwork -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/login.css">
    <link rel="shortcut icon" href="img/icone.ico" type="image/x-icon">
</head>

<body>
   <div class="conteudo">
      <div id="login">
         <div class="logo"><a href="index.php"><img src="img/logo.png" alt="" width="184px" height="63px"></a></div>
         <div id="divLogin">
            <form action="lib/validLogin.php" method="post" id="formLogin">
               <input type="text" name="email" placeholder="Email">
               <input type="password" name="senha" placeholder="Senha">
               <?php 
                  if(isset($_GET['login'])) {
                     if($_GET['login'] == 'erro') {
                        print_r('<div role="alert">
                        <p style="color: red; font-weight: bold;text-align: center;">Usuario ou senha incorretos!!</p>
                      </div>');
                     }
                  }
               ?>
               <button type="submit" name="submit">Efetuar Login</button>
            </form>
         </div>
         <a href="" class="esqueceu">Esqueçeu a senha?</a>
      </div>
      <p class="info">É novo na DevJobs? Cadastre-se como <a href="cadastroCandidato.php">Candidato</a>.</p>
   </div>


   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>