<?php

  session_start();

  $_SESSION['us']=false;

  include("conexao.php");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />
    <title>Document</title>
    <link rel="stylesheet" href="css/stylel.css" />
  </head>
  <body style>
    <div class="log1">
      <div class="midmid">

        <form method="post">

          <div class="nome">
            <input
              class="form-control form-control-lg"
              type="text"
              placeholder="nome"
              name="nome"
            />
          </div>

          <div class="senha">
            <input
              class="form-control form-control-lg"
              type="text"
              placeholder="senha"
              name="senha"
            />
          </div>

          <div class="bota">
            <input type="submit" class="btn btn-dark" value="login" name="env"/>
          </div>

        </form>

      </div>
    </div>
    <?php

      if(isset($_POST['env']) and isset($_POST['nome']) and isset($_POST['senha'])){

        $lolo  = $conn->prepare('SELECT * FROM usuarios WHERE loin=:loin AND senha=md5(:senha)');
        $lolo->execute(array('senha'=>$_POST['senha'],'loin'=>$_POST['nome']));

        $r = $lolo->fetch();

          if($r!=null){

            $_SESSION['us']=$r[1];
            $_SESSION['usid']=$r[0];

            header('location:prin.html');

        }
      }
    ?>
  </body>
</html>

