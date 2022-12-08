<?php
  if(!empty($_GET['idVaga']))
  {
     include("lib/conexao.php");

     $idVaga = $_GET['idVaga'];

     $sqlVaga = "SELECT * FROM vaga WHERE id_vaga=$idVaga";
     $resultVaga = $conn->query($sqlVaga);

     if($resultVaga->num_rows > 0) {
        while($resultVaga->fetch_array()) {
           $sqlDelete = "DELETE FROM vaga WHERE id_vaga=$idVaga";
           $resultDelete = $conn->query($sqlDelete);
        }
     } else {
        echo "erro ao apagar vaga";
     }
  }
  header('Location: adminVagas.php?login=ok');
?>