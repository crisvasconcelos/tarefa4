<?php
include_once '../conexao.php';

$cacadores = $_POST['cacadores'];
$demonio= $_POST['demonio'];

$cris = $con->prepare("UPDATE demonio SET cacadores = :cacadores, demonios = :demonio WHERE id= :id");
$cris->bindParam(':id', trim($_POST['id']), PDO::PARAM_INT);
$cris->bindParam(':cacadores', trim($_POST['cacadores']), PDO::PARAM_INT);
$cris->bindParam(':demonio', trim($_POST['demonio']), PDO::PARAM_INT);


$cris->execute();

header("location: demonios.php");
