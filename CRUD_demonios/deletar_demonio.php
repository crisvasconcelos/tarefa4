<?php
include_once '../conexao.php';
include_once("../permissão.php");
$id = $_GET['id'];
$cris = $con->prepare("DELETE FROM demonio WHERE id = :id");
$cris->bindParam(':id', trim($_GET['id']), PDO::PARAM_INT);
$cris->execute();

header("location:demonios.php");

