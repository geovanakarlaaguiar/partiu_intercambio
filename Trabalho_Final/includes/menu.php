<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand shadows-font" href="#"><b>Partiu-Intercâmbio</b></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Início <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Contato</a></li>
				<li><a href="#">Viajar</a></li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Estudar e Trabalhar <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Canadá</a></li>
            <li><a href="#">Malta</a></li>
            <li><a href="#">Inglaterra</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">USA</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Nova Zelândia</a></li>
          </ul>
        </li>

				<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Universidades <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">USA</a></li>
            <li><a href="#">Irlanda</a></li>
            <li><a href="#">Canadá</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Inglaterra</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Demais Destinos</a></li>
          </ul>
        </li>

				<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cursos de Idioma <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Astrália</a></li>
            <li><a href="#">Irlanda</a></li>
            <li><a href="#">Reino Unido</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">USA</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Demais Destinos</a></li>
          </ul>
        </li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <?php
        if(isset($_SESSION["id_usuario"])){
          echo '<li class="active"><a href="loggout.php">Sair</a></li>';
        }else{
          echo '<li class="active"><a href="login.php">Entrar</a></li>';
        }
        ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  <style media="screen">
  @media only screen and (min-width: 768px) {
    .dropdown:hover .dropdown-menu {
      display: block;
    }
  }
  </style>
  <script>
  $('.dropdown-toggle').click(function(e) {
    if ($(document).width() > 768) {
      e.preventDefault();

      var url = $(this).attr('href');


      if (url !== '#') {

        window.location.href = url;
      }

    }
  });
  </script>
</nav>
