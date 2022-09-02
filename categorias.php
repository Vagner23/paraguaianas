<?php

    include("conexao.php");
    
    $sqlca = 'SELECT * FROM categorias WHERE categoria_pai=:catpai';

    $categpais = $conn -> prepare($sqlca);
    $categpais->execute(array('catpai'=>57));

?>

<h2>categorias</h4>
<br>
<?php

    foreach($categpais as $pairow){

        echo "<h3>".$pairow[1]."</h6>";

        echo "<ul>";

        $categfil=$conn-> prepare($sqlca);
        $categfil->execute(array('catpai'=>$pairow[0]));

        foreach($categfil as $filrow){

            echo "<li><a class='sexo2' onclick='gerarcards(id)' id='".$filrow[0]."'>".$filrow[1]."</a></li>";

        }
        echo "</ul>";

    }

?>