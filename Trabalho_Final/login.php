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
  .shadows-font{
    font-family: 'Shadows Into Light', cursive;
  }
  </style>
</head>
<body>
  <?php
include "includes/menu.php";
   ?>
<div class="container" style="margin-top:80px">
<div class="col-lg-6">
<h2>Cadastre-se</h2>
<?php
if(isset($_POST["email-c"])){
    $email = $_POST["email-c"];
    $senha = MD5($_POST["senha-c"]);
    $sexo = $_POST["sexo"];
    $nome = $_POST["nome-c"];
    $conn = conecta_mysql();

    $sql = "SELECT id_usuario FROM cliente WHERE email = '$email'";
    if($query = mysqli_query($conn, $sql)){
        $data = mysqli_fetch_assoc($query);
            if(!isset($data["id_usuario"])){
                $sql = "INSERT INTO cliente (nome, email, senha, sexo) VALUES ('$nome', '$email', '$senha', '$sexo')";
                if(mysqli_query($conn, $sql)){
                    echo "<span class='alert alert-success'>Sucesso</span><br><br>";
                }else{
                    echo "<span class='alert alert-danger'>Falha</span><br><br>";
                }
            }else{
                echo "<span class='alert alert-danger'>Usuário já cadastro</span><br><br>";
            }
        }
    }
?>
<form method="POST">

  <div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" required id="exampleInputEmail1" name="nome-c" placeholder="Ex: Marcelo Danúbio">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" required class="form-control" id="exampleInputEmail1" name="email-c" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" required class="form-control" name="senha-c" id="exampleInputPassword1" placeholder="Senha">
  </div>

  <div class="radio">
    <label>
        <input type="radio" name="sexo" id="f" value="f" checked>
         Feminino
    </label>
  </div>
  <div class="radio">
    <label>
        <input type="radio" name="sexo" id="m" value="m" checked>
         Masculino
    </label>
  </div>

  <div class="radio">
    <label>
        <input type="radio" checked name="sexo" id="o" value="o" checked>
         Outros
    </label>
  </div>


  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>

</div>
<div class="col-lg-6" style="border-left:solid 1px #ccc">

<h2>Entrar</h2>
<?php
if(isset($_POST["email-l"])){
    $email = $_POST["email-l"];
    $senha = MD5($_POST["senha-l"]);
    $conn = conecta_mysql();

    $sql = "SELECT * FROM cliente WHERE email = '$email' AND senha = '$senha'";
    if($query = mysqli_query($conn, $sql)){
        if($data = mysqli_fetch_assoc($query)){
            if(isset($data["id_usuario"])){ 
                $_SESSION["id_usuario"] = $data["id_usuario"];
                $_SESSION["nome"] = $data["nome"];
                echo "<span class='alert alert-success'>Sucesso</span><br><br>";
            }else{
                echo "<span class='alert alert-danger'>Dados Incorretos</span><br><br>";
            }
        }else{
            echo "<span class='alert alert-danger'>Dados Incorretos</span><br><br>";
        }
    }
}
?>
<form method="POST">
<div class="form-group">
<label for="exampleInputEmail1">Email</label>
<input type="email" required class="form-control" id="exampleInputEmail1" name="email-l" placeholder="Email">
</div>
<div class="form-group">
<label for="exampleInputPassword1">Senha</label>
<input type="password" required class="form-control" name="senha-l" id="exampleInputPassword1" placeholder="Senha">
</div>

  <button type="submit" class="btn btn-primary">Entrar</button>
</form>

</div>
</div>

</body>
</html>
