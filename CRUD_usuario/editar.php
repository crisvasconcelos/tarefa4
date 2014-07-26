<?php
include_once '../conexao.php';

$login = $_POST['login'];
$senha = $_POST['senha'];

$cris = $con->prepare("UPDATE usuario SET login = :login, senha = md5(:senha) WHERE id= :id");
$cris->bindParam(':id', trim($_POST['id']), PDO::PARAM_INT);
$cris->bindParam(':senha', trim($_POST['senha']), PDO::PARAM_INT);
$cris->bindParam(':login', trim($_POST['login']), PDO::PARAM_INT);


$cris->execute();

header("location:usuario.php");
