<?php

    $proven = $conn->prepare('INSERT INTO vendas_produtos (produto_id,venda_id,valor_venda) VALUES (:proid,:vendaid,:valor)');
    $proven->execute(array('proid'=>$pro,'vendaid'=>$vendid,'valor'=>$valval));

    echo "criou<br>";
?>