<?php
include_once '../conexao.php';

$cacadores = $_POST['cacadores'];
$demonio= $_POST['demonio'];

//var_dump($_POST);
  
//if ($login ){
$cris = $con->prepare("INSERT INTO demonio(cacadores, demonios) VALUES (:cacadores, :demonios);");
$cris->bindParam(':cacadores', (trim($cacadores)), PDO::PARAM_STR);
$cris->bindParam(':demonios', (trim($demonio)), PDO::PARAM_STR);
$cris->execute();

//pg_query("INSERT INTO usuario (login,senha) VALUES ('$login','$senha');");
//}
header("location: demonios.php");