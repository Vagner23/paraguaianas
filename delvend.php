<?php

    include "conexao.php";

    $delvend = $conn->prepare('DELETE FROM vendas WHERE id=:id');
    $delvend->execute(array('id'=>$_GET['q']));

?>