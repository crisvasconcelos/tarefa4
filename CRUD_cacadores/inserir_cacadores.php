<?php
include_once '../conexao.php';

$cacadores = $_POST['cacadores'];

//var_dump($_POST);
  
//if ($login ){
$cris = $con->prepare("INSERT INTO cacadores(cacadores) VALUES (:cacadores);");
$cris->bindParam(':cacadores', strtoupper(trim($cacadores)), PDO::PARAM_STR);
$cris->execute();

//pg_query("INSERT INTO usuario (login,senha) VALUES ('$login','$senha');");
//}
header("location: cacadores.php");