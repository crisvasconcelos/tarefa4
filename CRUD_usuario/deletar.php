<?php
include_once '../conexao.php';

$id = $_GET['id'];
$cris = $con->prepare("DELETE FROM usuario WHERE id = :id");
$cris->bindParam(':id', trim($_GET['id']), PDO::PARAM_INT);
$cris->execute();

header("location:usuario.php");

