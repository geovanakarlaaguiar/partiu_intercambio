<?php
session_start();
UNSET($_SESSION["nome"]);
UNSET($_SESSION["id_usuario"]);
header("location:index.php");
?>