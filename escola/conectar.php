<?php
$serverName = "localhost";
$database = "escola";
$username = "root";
$password = "";

$strcon = mysqli_connect($serverName, $username, $password, $database);

if (!$strcon) {
    die("Falha na Conexão: " . mysqli_connect_error());
}
//echo "Sucesso na Conexão!";
