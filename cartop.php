<?php

$pro = $_GET['proid'];

$aberto = $conn ->prepare('SELECT FROM vendas WHERE usuario_id=:usid AND aberto=:aberto');
$aberto->execute(array('usdi'=>$_SESSION['usid'],'aberto'=>1));

$vendabert = $aberto->fetch();

if($vendabert==null){ //nehuma venda aberta

    include "criacart.php";

}
else{ //existe uma venda aberta

    $vendid= $vendabert[0];

    $proprod = $conn->prepare('SELECT FROM produtos WHERE id=:pro');
    $proprod -> execute(array('pro'=>$pro));

    $prepro = $proprod ->fetch();

    $valval = $prepro[4];

}
?>