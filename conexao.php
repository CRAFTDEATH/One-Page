<?php 

$host = "localhost";
$user = "root";
$psw = "";
$db = "comentarios";
$conect = mysqli_connect($host,$user,$psw,$db);
$charset = mysqli_set_charset($conect,"utf8");

?>