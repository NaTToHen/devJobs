<?php

include("conexao.php");

if(isset($_POST['update'])) {

   $id = $_POST['idVaga'];
   $nome = $_POST['nome'];
   $empresa = $_POST['email'];
   $salario = $_POST['telefone'];
   $desc = $_POST['desc'];
   $cidade = $_POST['cidade'];
   $estado = $_POST['estado'];

   $sqlUpdate = "UPDATE vaga SET nome_vaga = '$nome', empresa_vaga = '$empresa', salario_vaga = '$salario', desc_vaga = '$desc',cidade = '$cidade', estado='$estado' WHERE id_vaga=$id";

   $result = $conn->query($sqlUpdate);
}
header('Location: ../adminVagas.php?login=ok');
?>