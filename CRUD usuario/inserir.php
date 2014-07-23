<?php
include_once 'conexao.php'

$x = $con->prepare("INSERT INTO usuario(nome) VALUES(:nome)");
$x->bindParam(':nome', strtoupper(trim($_GET['nome'])), PDO::PARAM_STR);
$x->execute();

header('Location: listar.php');

?> 