<?php

include("conexao.php");


if(!isset($_GET['q'])){

    $cardres = $conn -> query('SELECT descricao,valor,imagem FROM produtos');

}
else{

    $cardres = $conn -> prepare('SELECT descricao,valor,imagem FROM produtos WHERE categoria_id=:catid');
    $cardres->execute(array('catid'=>$_GET['q']));

}

foreach($cardres as $produtorow){
    
    echo
    "<div class='card' style='width: 18rem;'>
        <img src='".$produtorow['imagem']."' class='card-img-top'>
        <div class='card-body'>
            <h5 class='card-title'>".$produtorow['valor']."</h5>
            <p class='card-text'>".$produtorow['descricao']."</p>
            <a href='#' class='btn btn-primary'>Go somewhere</a>
        </div>
    </div>";
    
}

?>