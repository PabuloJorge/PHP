<?php
$serverName = "localhost";
$database = "sistemafic";
$username = "root";
$password = "";

$strcon = mysqli_connect($serverName, $username, $password, $database);

if ($strcon) {
    echo "Sucesso na Conexão!";
} else {
    die("Falha na Conexão: " . mysqli_connect_error());
}
