<?php

$server = "localhost";
$port = "3306";
$user = "root";
$pass = "";
$db = "agro";

$connection = mysqli_connect($server, $user, $pass, $db, $port);

if($connection->connect_errno){
  echo "Falha ao conectar";
}

mysqli_set_charset($connection, "utf8");

?>