<?php


$host       = 'localhost';
$dbname     = 'sobrenatural';
$user       = 'sobrenatural';
$password   = '123';

$con = new PDO("pgsql:dbname=$dbname; host=$host", "$user", "$password");
