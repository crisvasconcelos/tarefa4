<?php
include_once '../conexao.php';

$login= $_POST['login'];
$senha = $_POST['senha'];
  

//if ($login ){
$cris = $con->prepare("INSERT INTO usuario(login,senha) VALUES(:login,md5(:senha))");
$cris->bindParam(':login', strtoupper(trim($login)), PDO::PARAM_STR);
$cris->bindParam(':senha', strtoupper(trim($senha)), PDO::PARAM_STR);
$cris->execute();

//pg_query("INSERT INTO usuario (login,senha) VALUES ('$login','$senha');");
//}
header("location: ../CRUD_usuario/usuario.php");

?> 
