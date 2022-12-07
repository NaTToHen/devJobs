<?php
   error_reporting();

   $conn = new mysqli("localhost", "root", "", "devjobs");
   if($conn->connect_errno)
   {
      echo "falha ao conectar" . $misqli -> connect_errno;
   }
?>