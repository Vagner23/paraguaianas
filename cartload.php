<?php

session_start();

if($_SESSION['us']!=false){

    include "conexao.php";
    
}

$cardraw = $conn ->prepare('SELECT * FROM vendas WHERE usuario_id=:usid AND aberto=:aberto');
$cardraw->execute(array('usid'=>$_SESSION['usid'],'aberto'=>1));

$vendinha = $cardraw->fetch();

if($vendinha==null){

    echo"carrinho vaziu";

}
else{

    $cartpro=$conn->prepare('SELECT vp.valor_venda , pd.descricao FROM vendas_produtos AS vp JOIN produtos AS pd ON vp.produto_id = pd.id  WHERE venda_id=:vid ');
    $cartpro->execute(array('vid'=>$vendinha[0]));

    $totval=0;

    $respbody="";

    foreach($cartpro as $vendprorow){

        $totval=$totval+$vendprorow[0];

        $respbody = $respbody . "<div class='podpod'>produto:".$vendprorow[1]."<br>valor:".$vendprorow[0]."<div>";

    }

    $resph="<div class='carth'>id da venda:".$vendinha[0]."<br>valor da venda:".$totval."</div>";

    $respend=$resph.$respbody;

    echo $respend;

}
?>