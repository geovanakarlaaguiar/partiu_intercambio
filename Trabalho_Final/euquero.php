<?php
session_start();
include "conexao.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .shadows-font{
    font-family: 'Shadows Into Light', cursive;
  }
  .josefin-font{
    font-family: 'Josefin Sans', sans-serif;
  }
  </style>
</head>
<body>
<div class="container-fluid" style="margin-top:80px">
<div class="container-fluid">
<div class="row">
  <?php
include "includes/menu.php";
$conn = conecta_mysql();
if(isset($_GET["p"])){
    $p = $_GET["p"];
    $sql = "SELECT * FROM planos WHERE id_plano = $p";
    if($query = mysqli_query($conn, $sql)){
        $plano = mysqli_fetch_assoc($query);
        if(isset($plano["id_plano"])){
            echo "<div class='container-fluid'
             style='height:600px;background:url(\"".$plano["imagem"]."\")
             ;background-size:cover;background-position:center'>";
             echo "<h1 class='josefin-font' style='color:#eee;padding:15px;border:solid 5px rgba(250, 250, 250, 0.4)';margin-top:70px'>".$plano["destino"]."</h1>";
             echo "</div>";
             echo '<form method="post" style="">
             <h1>Preencha o Formulário</h1>
             <fieldset>
             <fieldset>
             <legend>Dados Básicos</legend>
             <label>Tipo de Cartão: <select class="cardtype">
             <option value="visa">Visa (1x)</option>
             <option value="visa">Mastercard (1x)</option>
             <option value="visa">Banco do Brasil (1x)</option>
             <option value="visa">Diners (1x)</option>
             </select></label><br>
             <label>Validade: <input type="number" required min="1" max="12">/20
             <input type="number" min="0" max="99" required></label><br>
             <label>Código de Segurança: <input type="number" required maxlength="3"></label><br>
             <label>Nome no Cartão: <input type="text" required maxlength="34"></label><br>
             <label>Doar R$: <select>
             <option value="10">10</option>
             <option value="30">30</option>
             <option value="50">50</option>
             <option value="100">100</option>
             </select></label>
             </fieldset>
             <input type="submit" value="Enviar">
             <input type="reset" value="Cancelar">
             </fieldset>
             </form>';
            }
        }
}

   ?>
</div>
</div>
</div>

</body>
</html>
