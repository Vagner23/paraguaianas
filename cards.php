<?php

include("conexao.php");

$cardres = $conn -> query('SELECT descricao,valor,imagem FROM produtos');

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