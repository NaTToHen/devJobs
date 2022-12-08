<?php
  if(!empty($_GET['id']))
  {
     include("lib/conexao.php");

     $id = $_GET['id'];

     $sqlUser = "SELECT * FROM usuario WHERE id_usuario=$id";
     $resultUser = $conn->query($sqlUser);

     if($resultUser->num_rows > 0) {
        while($resultUser->fetch_array()) {
           $sqlDelete = "DELETE FROM usuario WHERE id_usuario=$id";
           $resultDelete = $conn->query($sqlDelete);
        }
     } else {
        header('Location: adminVagas.php?login=ok');
     }
  }
  header('Location: adminVagas.php?login=ok');
?>