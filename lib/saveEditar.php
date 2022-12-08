<?php

include("conexao.php");

if(isset($_POST['update'])) {

   $id = $_POST['id'];
   $nome = $_POST['nome'];
   $email = $_POST['email'];
   $telefone = $_POST['telefone'];
   $cidade = $_POST['cidade'];
   $estado = $_POST['estado'];

   $sqlUpdate = "UPDATE usuario SET nome_usuario = '$nome', email_usuario = '$email', telefone_usuario = '$telefone', cidade = '$cidade', estado= '$estado' WHERE id_usuario=$id";

   $result = $conn->query($sqlUpdate);
}
header('Location: ../adminVagas.php?login=ok');
?>