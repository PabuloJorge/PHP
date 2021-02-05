<?php
session_start();

echo "<h2>Dados da Sessão</h2>";

echo $_SESSION['nome'] . "<br>";
echo $_SESSION['sobrenome'] . "<br>";
echo $_SESSION['data'] . "<br>";

echo "<br><a href='Sessao.php'>Voltar</a>";
