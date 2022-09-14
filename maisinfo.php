<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <title>Document</title>
    </head>

    <body>

        <?php

        session_start();

        if($_SESSION['us']!=false){
            include "conexao.php";
        }

        $inf = $conn->prepare("SELECT * FROM produtos WHERE id=:id");
        $inf->execute(["id" => $_GET["id"]]);

        $inf = $inf->fetch();
        ?>

        <link rel="stylesheet" href="css/style2.css">
        <link rel="stylesheet" href="css/infsty.css">
        <script src="js/ajax2.js"></script>

        <header class="header">commerce</header>

        <nav class="navbar navbar-expand-lg dcdc">
            <div class="container-fluid">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="prin.html">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">loggout</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" id="pod" aria-current="page" href="cart.html">carrinho</a>
                    </li>
                    
                </ul>
            </div>
        </nav>

        <?php
        echo '<div class="ticont" style="background-image: url(' .
          $inf["imagem"] .
          ');">';

        echo '<div class="title"><h3>' . $inf["descricao"] . "</h3></div>";

        echo "</div>";

        $p = explode(" - ", $inf["caracteristicas"]);
        $p = implode("<br>", $p);
        ?>
        <div class="contai">
            <button class="comp btn btn-success" onclick="addcart(<?php echo $_GET['id'];?>)">adiconar ao carrinho - <?php echo $inf["valor"]; ?></button>
        </div>
        <?php echo '<div class="info">
        <strong>resumo:</strong><br>' .
          $inf["resumo"] .
          '
        <hr>
        <strong>características:</strong><br>' .
          $p .
          '
        </div>'; ?>

        <br>
        <br>
        <br>
        <br>
        <br>

        <div id="codfod"></div>

    </body>

</html>