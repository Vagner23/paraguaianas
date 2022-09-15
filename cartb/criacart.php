<?php

    $cartn = $conn->prepare('INSERT INTO vendas (usuario_id,aberto) VALUES (:usid,:aberto)');
    $cartn->execute(array('usid'=>$_SESSION['usid'],'aberto'=>1));

?>