<?php

if (!$_SESSION['admin']) {
    header("location: ../sem_permissao.php");
}

