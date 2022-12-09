<?php
  include_once("lib/conexao.php");
  session_start();

  function fecharSessao() {
    unset($_SESSION['email']);
  }

  if(!isset($_SESSION['email']) == true) {
    unset($_SESSION['email']);
    header('Location: login.php');
  }

  $logado = $_SESSION['email'];

  if(isset($_POST['submit']))
  {
   $nome_vaga = $_POST['nome'];
   $desq_vaga = $_POST['desq'];
   $empresa_vaga = $_POST['empresa'];
   $salario_vaga = $_POST['salario'];
   $cidade = $_POST['cidade'];
   $estado = $_POST['estado'];

    $result = mysqli_query($conn, "INSERT INTO vaga(nome_vaga, desc_vaga, empresa_vaga, salario_vaga, cidade, estado) VALUES ('$nome_vaga','$desq_vaga','$empresa_vaga','$salario_vaga','$cidade','$estado')");
      
      mysqli_close($conn);

      header('Location: adminVagas.php');

  }

  $sqlLista = "SELECT * FROM vaga ORDER BY id_vaga DESC";
  $sqlUser = "SELECT * FROM usuario ORDER BY id_usuario DESC";
  
  $resultLista = $conn->query($sqlLista);
  $resultUser = $conn->query($sqlUser);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>DevJobs - Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="CodedThemes">
    <meta name="keywords" content=" Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="CodedThemes">
    <!-- Required Fremwork -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/index.css">
    <link rel="shortcut icon" href="img/icone.ico" type="image/x-icon">
</head>

<body>
<div id="fundoModal"></div>

  <header>
        <nav class="navbar navbar-fixed-top navbar-expand-lg navbar-light bg-white">
          <a class="navbar-brand logo" href="index.php"><img src="img/logo.png" alt="" width="124px" height="40px"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <?php echo '<a class="btn btn-danger" href="lib/deslogar.php?token='.md5($_SESSION['email']).'" role="button">Sair</a>' ?>
            </ul>
          </div>
        </nav>
  </header>

  <div id="menu">
      <ul>
         <li onclick="mostrarVagas(), fecharUsuarios()"><p><img src="img/icone-vagas.png" width="40px" height="40px">Gerenciar vagas</p></li>
         <li onclick="mostrarUsuarios(), fecharVagas()"><p href=""><img src="img/user-icone.png">Gerenciar usuarios</p></li>
         <li><p href=""><img src="img/icone-empresa.png" width="40px" height="40px">Gerenciar empresas</p></li>
         <li><p href=""><img src="img/icone-relatorio.png">Imprimir relatorio</p></li>
      </ul>
  </div>

  <button class="addVaga" onclick="abrirModal()">Criar vaga</button>
  <a href="cadastroCandidato.php"><button class="addUser">Criar usuario</button></a>

    <div id="modal">
      <button type="submit" class="btn btn-outline-danger btnSair" onclick="fecharModal()" name="sair" id="fechar">X</button>
      <p class="titulo-modal">Criar vaga</p>
      <form action="adminVagas.php" method="POST">
        <input type="text" class="form-control" id="" placeholder="Nome" name="nome">
        <input type="text" class="form-control" id="" placeholder="Empresa" name="empresa">
        <input type="text" class="form-control" id="" placeholder="Salario" name="salario">
        <textarea class="form-control" id="desq" name="desq"></textarea>
        <input type="text" class="form-control" id="cidade" placeholder="Cidade" name="cidade">
        <input type="text" class="form-control" id="estado" placeholder="Estado" name="estado">
        <button type="submit" class="btn btn-primary cadastrar" name="submit">Cadastrar vaga</button>
      </form>
    </div>

  <table class="table usuarios" id="tabela">
   <thead>
     <tr>
       <th scope="col">Id</th>
       <th scope="col">Nome</th>
       <th scope="col">Email</th>
       <th scope="col">Telefone</th>
       <th scope="col">Localização</th>
       <th scope="col" class="acoes">Ações</th>
     </tr>
   </thead>
   <tbody>
      <?php 
        while($user_data = $resultUser->fetch_array()) {
          echo "<tr>";
          echo "<td>".$user_data['id_usuario']."</td>";
          echo "<td>".$user_data['nome_usuario']."</td>";
          echo "<td>".$user_data['email_usuario']."</td>";
          echo "<td>".$user_data['telefone_usuario']."</td>";
          echo "<td>".$user_data['cidade']."-".$user_data['estado']."</td>";
          echo "<td></a><a href='editar.php?id=$user_data[id_usuario]'><img src='img/icone-alterar.png' width='30px' height='30px'></a><a href='deleteUser.php?id=$user_data[id_usuario]'><img src='img/icone-excluir.png' width='30px' height='30px'></td>";
          echo "</tr>";
        }
      ?>
   </tbody>
 </table>

 <table class="table vagas" id="tabela">
   <thead>
     <tr>
       <th scope="col">id</th>
       <th scope="col">Nome</th>
       <th scope="col">Empresa</th>
       <th scope="col">Localização</th>
       <th scope="col">Salario</th>
       <th scope="col" class="acoes">Ações</th>
     </tr>
   </thead>
   <tbody>
     <tr>
      <?php 
        while($user_data = $resultLista->fetch_array()) {
          echo "<tr>";
          echo "<td>".$user_data['id_vaga']."</td>";
          echo "<td>".$user_data['nome_vaga']."</td>";
          echo "<td>".$user_data['empresa_vaga']."</td>";
          echo "<td>".$user_data['cidade']."-".$user_data['estado']."</td>";
          echo "<td>"."R$ ".$user_data['salario_vaga']."</td>";
          echo "<td></a><a href='editarVagas.php?idVaga=$user_data[id_vaga]'><img src='img/icone-alterar.png' width='30px' height='30px'></a><a href='deleteVaga.php?idVaga=$user_data[id_vaga]'><img src='img/icone-excluir.png' width='30px' height='30px'></td>";
          echo "</tr>";
        }
      ?>
     </tr>
   </tbody>
 </table>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="assets/js/modal.js"></script>

</body>
</html>