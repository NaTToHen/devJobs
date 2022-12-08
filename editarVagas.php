<?php 
   if(!empty($_GET['idVaga']))
   {
      include("lib/conexao.php");

      $idVaga = $_GET['idVaga'];

      $sqlcode = "SELECT * FROM vaga WHERE id_vaga=$idVaga";
      $result = $conn->query($sqlcode);

      if($result->num_rows > 0) {
         while($user_data = $result->fetch_array()) {
            $nome = $user_data['nome_vaga'];
            $empresa = $user_data['empresa_vaga'];
            $salario = $user_data['salario_vaga'];
            $desc = $user_data['desc_vaga'];
            $cidade = $user_data['cidade'];
            $estado = $user_data['estado'];
         }
      } else {
         header('Location: adminVagas.php?login=ok');
      }

      /*$result = mysqli_query($conn, "INSERT INTO usuario(nome_usuario, email_usuario, senha_usuario, telefone_usuario, cidade, estado) VALUES ('$nome','$email','$senha','$telefone','$cidade','$estado')");

         if(mysqli_affected_rows($conn) == 1) {
               sleep(2);
         } else {
               echo "Erro, não possível inserir no banco de dados";
         }
         mysqli_close($conn);
      
      */
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
   <a href="adminVagas.php?login=ok"><img src="img/logobranca.png" alt="" width="212px" height="73px"></a>
   </div>

   <div id="direita">
      
      <div class="form">
         <?php
         echo "<form action='lib/salvarVagas.php' method='POST'>
            <h1>Editar Usuario</h1>
            <input name='nome' type='text' placeholder='nome' value='$nome' required>
            <input name='email' class='email' type='text' placeholder='empresa' value='$empresa' required>
            <input name='telefone' type='text' placeholder='telefone' value='$salario' required>
            <textarea class='form-control email' id='desq' name='desc' value='$desc'></textarea>
            <input name='cidade' type='text' placeholder='cidade' value='$cidade' required>
            <input name='estado' type='text' placeholder='estado' value='$estado' required style='width: 70%;'>
            <input name='idVaga' type='hidden' value='$idVaga'>
            <button name='update' type='submit' method='POST'>Efetuar Mudanças</button>
         </form>";
         ?>
      </div>
   </div>

   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>