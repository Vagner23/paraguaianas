<?php

session_start();

if($_SESSION['us']!=false){

  include "conexao.php";
  
}
$sqlca = "SELECT * FROM categorias WHERE categoria_pai=:catpai";

$categpais = $conn->prepare($sqlca);
$categpais->execute(["catpai" => 57]);
?>

<h2>usuário:</h4>
  <?php echo "<ul><li><h2 style='color:rgb(0,15,100);'>".$_SESSION['us']."</h2></li></ul>";?>
  <hr>
<h2>categorias:</h2>
  <ul>
    <?php foreach ($categpais as $pairow) {
      echo "<h3>" . $pairow[1] . "</h3>";

      echo "<ol>";

      $categfil = $conn->prepare($sqlca);
      $categfil->execute(["catpai" => $pairow[0]]);

      foreach ($categfil as $filrow) {
        echo "<li><a class='sexo2' onclick='gerarcards(id)' id='" .
          $filrow[0] .
          "'>" .
          $filrow[1] .
          "</a></li>";
      }
      echo "</ol>";
    }
    ?>
  </ul>

