<?php

session_start();

include "conexao.php";

$pro = $_GET['proid'];

$aberto = $conn ->prepare('SELECT * FROM vendas WHERE usuario_id=:usid AND aberto=:aberto');
$aberto->execute(array('usid'=>$_SESSION['usid'],'aberto'=>1));

$vendabert = $aberto->fetch();

if($vendabert==null){ //nehuma venda aberta

    include "cartb/criacart.php";

    $aberto = $conn ->prepare('SELECT * FROM vendas WHERE usuario_id=:usid AND aberto=:aberto');
    $aberto->execute(array('usid'=>$_SESSION['usid'],'aberto'=>1));

    $vendabert = $aberto->fetch();

}
else{
    echo "ja tem";
}

$vendid= $vendabert[0];

$proprod = $conn->prepare('SELECT * FROM produtos WHERE id=:pro');
$proprod -> execute(array('pro'=>$pro));

$prepro = $proprod ->fetch();

$valval = $prepro[4];

include "cartb/addcart.php";

?>