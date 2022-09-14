<?php
  $user = "root";
  $pass = "";

  $conn = new PDO("mysql:host=localhost;dbname=meu_commerce", $user, $pass);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
?>