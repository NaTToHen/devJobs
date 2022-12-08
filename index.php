<?php
  include("lib/conexao.php");

  $sqlLista = "SELECT * FROM vaga ORDER BY id_vaga LIMIT 6";
  $resultLista = $conn->query($sqlLista);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>DevJobs - Home</title>
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
    <link rel="stylesheet" href="assets/css/teste.css">
    <link rel="shortcut icon" href="img/icone.ico" type="image/x-icon">
</head>

<body style="">
   
  <header>
      <nav class="navbar navbar-fixed-top navbar-expand-lg navbar-light bg-white">
         <a class="navbar-brand" href="#"><img src="img/logo.png" alt="" width="124px" height="40px"></a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNavDropdown">
           <ul class="navbar-nav">
             <li class="nav-item active">
               <a class="nav-link" href="#">Inicio<span class="sr-only">(current)</span></a>
             <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                 Candidato
               </a>
               <div class="dropdown-menu">
                 <a class="dropdown-item" href="#">Procurar Vagas</a>
                 <a class="dropdown-item" href="#">Meu perfil</a>
               </div>
             </li>
             <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                 Empresa
               </a>
               <div class="dropdown-menu">
                 <a class="dropdown-item" href="#">Minhas Vagas</a>
                 <a class="dropdown-item" href="#">Gerenciar Empresa</a>
               </div>
             </li>
             <a class="btn btn-primary" href="login.php" role="button">Entrar</a>
           </ul>
         </div>
       </nav>
  </header>
  <main>
    <div id="topo">
        <img src="img/fundo.png" width="100%" height="550px" alt="">
        <h1 class="tituloTopo">Cadastro rápido e fácil. Aqui a vaga procura você!</h1>
        <form action="buscarVagas.php" method="get"><input type="text" placeholder="Encontre a sua vaga" name="vaga_pesquisada" id="pesquisar">
        <br>
        <button type="submit" name="submit">Buscar Vaga</button>
      </form>
    </div>

    <div id="icones">
        <h1>Vagas em todas as linguagens</h1>
        <div id="gridIcones">
          <img src="img/image 1.png" alt="">
          <img src="img/image 2.png" alt="">
          <img src="img/image 3.png" alt="">
          <img src="img/image 4.png" alt="">
          <img src="img/image 5.png" alt="">
          <img src="img/vscode-icons_file-type-css.png" alt="">
          <img src="img/vscode-icons_file-type-html.png" alt="">
          <img src="img/logos_javascript.png" alt="">
        </div>
        <h1 class="h12">Vagas recentes</h1>
        <?php
        while($user_data = $resultLista->fetch_array()) {
        echo "<a href='vaga.php?id=$user_data[id_vaga]' class='hoverVaga'>
        <div class='gridVagas'>
            <div class='vaga'>
                <h2>$user_data[nome_vaga]</h2>
                <h3>$user_data[empresa_vaga]</h3>
                <h2>$user_data[cidade] - $user_data[estado]</h2>
                <h2 class='salario'>R$ $user_data[salario_vaga] / mês</h2>
                <button class='infoVaga' type='submit'>Saiba Mais</button>
            </div>
           </div>
      </a>";
            }
          ?>
    </div>
  </main>

  <footer>
    <div>
      <a class="navbar-brand" href="index.php"><img src="img/logobranca.png" alt="" width="175px" height="60px"></a>
    </div>
    <div>
      <h1>Candidato</h1>
      <ul>
        <li><a href="">vagas disponiveis</a></li>
        <li><a href="">vagas aplicadas</a></li>
      </ul>
    </div>
    <div>
      <h1>Empresa</h1>
      <ul>
        <li><a href="">vagas disponiveis</a></li>
        <li><a href="">vagas aplicadas</a></li>
      </ul>
    </div>
    <p>© Copyright DevJobs 2022 
      Todos os direitos reservados.</p>
  </footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>