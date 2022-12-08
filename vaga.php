<?php 
   if(!empty($_GET['id']))
   {
      include("lib/conexao.php");

      $id = $_GET['id'];

      $sqlcode = "SELECT * FROM vaga WHERE id_vaga=$id";
      $result = $conn->query($sqlcode);

      if($result->num_rows > 0) {
         while($user_data = $result->fetch_array()) {
            $nome = $user_data['nome_vaga'];
            $empresa = $user_data['empresa_vaga'];
            $desc = $user_data['desc_vaga'];
            $salario = $user_data['salario_vaga'];
            $cidade = $user_data['cidade'];
            $estado = $user_data['estado'];
         }
      } else {
        echo "erro";
      }
    }
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
    <link rel="stylesheet" type="text/css" href="assets/css/vaga.css">
    <link rel="stylesheet" type="text/css" href="assets/css/teste.css">
    <link rel="stylesheet" href="">
    <link rel="shortcut icon" href="img/icone.ico" type="image/x-icon">
</head>

<body>
   
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

  <div id="conteudo">
      <div id="topo">
         <h1 class="nome"><?php echo $nome?></h1>
         <h2 class="cidade"><?php echo $cidade . "-" . $estado?></h2>
         <h1 class="salario"><?php echo "R$" . $salario?></h1>
         <button class="botao btn btn-primary"><a class="" href="vaga.html" role="button" style="color: white;">Se candidatar</a></button>
      </div>
      <div>
         <h1 id="desc">Descrição</h1>
         <p><?php echo $desc?></p>
         <h1 id="desc"><?php echo $empresa?></h1>
         <div class="empresa">
            <img src="img/logo empresa.png" alt="" width="170px" height="170px" class="imgEmpresa">
            <p class="descEmpresa">Empresa localizada na cidade de São Paulo/SP do ramo Informática, contrata Desenvolvedor. Atribuições Devenvolvedores, estamos com oportunidades: Desenvolvedor fullstack java angular 6+ desenvolvedor fullstack java angular js desenvolvedor front angular desenvolvedor backend (java + springboot) Tipo de Vínculo Efetivo - Home Office.</p>
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