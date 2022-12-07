<?php
  include("lib/conexao.php")
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
    <link rel="stylesheet" type="text/css" href="assets/css/teste.css">
    <link rel="shortcut icon" href="img/icone.ico" type="image/x-icon">
</head>

<body style="">

  <header>
        <nav class="navbar navbar-fixed-top navbar-expand-lg navbar-light bg-white">
          <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="" width="124px" height="40px"></a>
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

  <div id="icones">
      <h1 class="h12">valor pesquisado</h1>
      <div id="gridVagas">
         <div class="vaga">
            <h2>desenvolvedor php</h2>
            <h3>Teck tecnologias</h3>
            <h2>São paulo - SP</h2>
            <h2 class="salario">R$ 3000,00</h2>
            <button class="infoVaga"><a class="btn" href="vaga.html" role="button" style="color: white;">Saiba mais</a></button>
         </div>
      </div>
      <div id="gridVagas">
         <div class="vaga">
            <h2>desenvolvedor php</h2>
            <h3>Teck tecnologias</h3>
            <h2>São paulo - SP</h2>
            <h2 class="salario">R$ 3000,00</h2>
            <button class="infoVaga"><a class="btn" href="vaga.html" role="button" style="color: white;">Saiba mais</a></button>
         </div>
      </div>
      <div id="gridVagas">
         <div class="vaga">
            <h2>desenvolvedor php</h2>
            <h3>Teck tecnologias</h3>
            <h2>São paulo - SP</h2>
            <h2 class="salario">R$ 3000,00</h2>
            <button class="infoVaga"><a class="btn" href="vaga.html" role="button" style="color: white;">Saiba mais</a></button>
         </div>
      </div>
   
  </div>

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