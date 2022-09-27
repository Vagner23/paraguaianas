<?php

session_start();

if($_SESSION['us']!=false){

    include "conexao.php";
    
}

$cardraw = $conn ->prepare('SELECT * FROM vendas WHERE usuario_id=:usid AND aberto=:aberto');
$cardraw->execute(array('usid'=>$_SESSION['usid'],'aberto'=>1));

$vendinha = $cardraw->fetch();

if($vendinha==null){

    echo"nenhum carrinho ativo";

}
else{

    $cartpro=$conn->prepare('SELECT vp.valor_venda , pd.descricao , vp.id FROM vendas_produtos AS vp JOIN produtos AS pd ON vp.produto_id = pd.id  WHERE venda_id=:vid ');
    $cartpro->execute(array('vid'=>$vendinha[0]));

    $totval=0;

    $respbody="";

    foreach($cartpro as $vendprorow){
        

        $totval=$totval+$vendprorow[0];

        $respbody = $respbody . "<div class='podpod'> <div class='textinfo'>produto:".$vendprorow[1]."<br>valor:"
        .$vendprorow[0]."</div><div><button type='button' onclick='delvp(".$vendprorow[2].")' class='btn btn-warning'> remover </button></div></div>";

    }
    $bot="<div class='both'><button type='button' onclick='fimvend(".$vendinha[0].")' class='btn btn-success'>finalizar</button>
    <button type='button' onclick='delvend(".$vendinha[0].")' class='btn btn-danger'>destruir</button></div>";

    $resph="<div class='carth'><div class='htb'>id da venda:".$vendinha[0]."<br>valor da venda:".$totval."</div>".$bot."</div>";

    $respend=$resph.$respbody;

    echo $respend;

}
?>