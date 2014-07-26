<?php
include_once '../conexao.php';

$cacadores = $_POST['cacadores'];

$cris = $con->prepare("UPDATE cacadores SET cacadores = :cacadores WHERE id= :id");
$cris->bindParam(':id', trim($_POST['id']), PDO::PARAM_INT);
$cris->bindParam(':cacadores', trim($_POST['cacadores']), PDO::PARAM_INT);

$cris->execute();

header("location: cacadores.php");
