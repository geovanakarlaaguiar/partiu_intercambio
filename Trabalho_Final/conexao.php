<?php
function conecta_mysql(){
    $host = "localhost";
    $user = "root";
    $passwd = "root";
    $db = "karla_intercambio";

    $conn = mysqli_connect($host, $user, $passwd, $db);
    mysqli_set_charset($conn, "utf8");
    return $conn;
}
?>