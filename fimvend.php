<?php

    include "conexao.php";

    $fimvend = $conn->prepare('UPDATE vendas SET aberto = :fechado WHERE id = :id');
    $fimvend->execute(array('fechado'=>0,'id'=>$_GET['q']));

?>