<?php
$user = "root";
$pass = "";

try {
  $conn = new PDO("mysql:host=localhost;dbname=meu_commerce", $user, $pass);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOExeption $e) {
  echo "ERROR: " . $e->getMessage();
}

?>