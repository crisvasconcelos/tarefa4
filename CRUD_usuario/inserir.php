<?php
include_once '../conexao.php';

$login= $_POST['login'];
$senha = $_POST['senha'];
$is_admin = empty($_POST['isadmin'] ) ? 'FALSE' : 'TRUE';



//if ($login ){
$cris = $con->prepare("INSERT INTO usuario(login,senha,admin) VALUES(:login,md5(:senha),:admin)");
$cris->bindParam(':login', (trim($login)), PDO::PARAM_STR);
$cris->bindParam(':senha', (trim($senha)), PDO::PARAM_STR);
$cris->bindParam(':admin', $is_admin , PDO::PARAM_STR);
$cris->execute();

//pg_query("INSERT INTO usuario (login,senha) VALUES ('$login','$senha');");
//}
header("location: ../CRUD_usuario/usuario.php");

?> 
