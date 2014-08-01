<?php
var_dump($_SESSION);
if (!$_SESSION['admin']) {
    header("location: ../sem_permissao.php");
}

