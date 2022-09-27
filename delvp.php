<?php

    include "conexao.php";

    $delvp = $conn->prepare('DELETE FROM vendas_produtos WHERE id = :id');
    $delvp ->execute(array('id'=>$_GET['q']));

?>