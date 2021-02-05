<?php
session_start();

$_SESSION['nome'] = "Pablo";
$_SESSION['sobrenome'] = "Jorge";
$_SESSION['data'] = date('d/m/y, time()');

echo "<h2>As variáveis de sessão foram definidas.</h2>";
echo "<a href='mostraSessao.php'>Dados da Sessão</a>";
