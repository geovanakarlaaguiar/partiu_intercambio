
<!-- <!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Dropdowns</h2>
  <p>The .dropdown class is used to indicate a dropdown menu.</p>
  <p>Use the .dropdown-menu class to actually build the dropdown menu.</p>
  <p>To open the dropdown menu, use a button or a link with a class of .dropdown-toggle and data-toggle="dropdown".</p>
  <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">HTML</a></li>
      <li><a href="#">CSS</a></li>
      <li><a href="#">JavaScript</a></li>
    </ul>
  </div>
</div>

</body>
</html> -->

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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  /*.carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      height: 300px;
      margin: auto;
  }*/
  .shadows-font{
    font-family: 'Shadows Into Light', cursive;
  }
  </style>
</head>
<body>
  <?php
include "includes/menu.php";


   ?>
<div class="container-fluid" style="margin-top:80px">

  <!-- <div id="myCarousel" class="carousel slide"> -->
    <!-- Indicators -->

    <!-- <ol class="carousel-indicators">
      <li class="item1 active"></li>
      <li class="item2"></li>
      <li class="item3"></li>
      <li class="item4"></li>
    </ol> -->

    <!-- Wrapper for slides -->
    <!-- <div class="carousel-inner col-lg-12" role="listbox">

      <div class="item active">
        <img src="IMG/c.jpg" alt="Chania"  height="345">
        <div class="carousel-caption">

        </div>
      </div>

      <div class="item">
        <img src="IMG/d.jpg" alt="Chania"  height="345">
        <div class="carousel-caption">

        </div>
      </div>

      <div class="item">
        <img src="IMG/a.jpg" alt="Flower"  height="345">
        <div class="carousel-caption">

        </div>
      </div>

      <div class="item">
        <img src="IMG/b.jpg" alt="Flower"  height="345">
        <div class="carousel-caption">

        </div>
      </div>

      <div class="item">
        <img src="IMG/e.jpg" alt="Flower"  height="345">
        <div class="carousel-caption">
        </div>
      </div>

      <div class="item">
        <img src="IMG/f.jpg" alt="Flower"  height="345">
        <div class="carousel-caption">

        </div>
      </div>

      <div class="item">
        <img src="IMG/g.jpg" alt="Flower"  height="345">
        <div class="carousel-caption">

        </div>
      </div>

      <div class="item">
        <img src="IMG/h.jpg" alt="Flower"  height="345">
        <div class="carousel-caption">

        </div>
      </div>

      <div class="item">
        <img src="IMG/i.jpg" alt="Flower"  height="345">
        <div class="carousel-caption">

        </div>
      </div>


      </div>

    </div> -->

    <!-- Left and right controls -->
    <!-- <a class="left carousel-control" href="#myCarousel" role="button">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div> -->

<!-- <script>
$(document).ready(function(){ -->
    <!-- // Activate Carousel -->
    <!-- $("#myCarousel").carousel(); -->

    <!-- // Enable Carousel Indicators
    $(".item1").click(function(){
        $("#myCarousel").carousel(0);
    });
    $(".item2").click(function(){
        $("#myCarousel").carousel(1);
    });
    $(".item3").click(function(){
        $("#myCarousel").carousel(2);
    });
    $(".item4").click(function(){
        $("#myCarousel").carousel(3);
    });

    // Enable Carousel Controls
    $(".left").click(function(){
        $("#myCarousel").carousel("prev");
    });
    $(".right").click(function(){
        $("#myCarousel").carousel("next");
    });
});
</script> -->


<div class="container">
<div class="row">
<?php
$conn = conecta_mysql();
$sql = "SELECT * FROM planos LIMIT 2";
if($query = mysqli_query($conn, $sql)){
  $ct = 0;
  $offset = "";
  while($plano = mysqli_fetch_assoc($query)){
    $ct++;
    if($ct == 2){
      $offset="col-lg-offset-2";
    }
    echo '
    <div class="col-lg-5 '.$offset.' col-sm-6 col-md-4">
    <div class="thumbnail">
    <img src="'.$plano["imagem"].'" alt="...">
    <div class="caption">
    <h3>'.$plano["titulo"].'</h3>
    <p>'.$plano["descricao"].'</p>
    <span style=\'color:#933\'>Preço: R$ '.$plano["preco"].' - 4 semanas </span>
    <p><a href="euquero.php?p='.$plano["id_plano"].'" class="btn btn-success" role="button">Eu quero</a></p>
    </div>
    </div>
    </div>
    ';
  }
}
?>
</div>
</div>


</div>

</body>
</html>
