<?php
include_once("conectar.php");

$nome = $_POST['nome'];

$sql = "DELETE FROM usuarios WHERE nome = '$nome' ";

$resultado = mysqli_query($strcon, $sql);

echo "Exclusão realizada com sucesso!";

mysqli_close($strcon);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir</title>
</head>
<body>
    <a href="pesquisa-exclui.php">Voltar</a>
</body>
</html>