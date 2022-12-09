<?php
session_start();
include('conexao.php');

$token = md5($_SESSION['email']);

if(isset($_GET['token']) && $_GET['token'] === $token) {
   unset($_SESSION['email']);
   header("Location: ../login.php");
   exit();
}

?>