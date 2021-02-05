<?php
include_once("conectar.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Lista de Alunos</title>

</head>

<body>
    <h1>Escola Da Conquista</h1>
    <h2>Lista de Alunos</h2>
    <table name="lista" border='1' width='50%'>
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>IDADE</th>
            <th>ENDEREÇO</th>
        </tr>

        <?php
        $sql = "SELECT * FROM alunos";
        $resultado = mysqli_query($strcon, $sql);

        while ($registro = mysqli_fetch_array($resultado)) {
            $id = $registro['id'];
            $nome = $registro['nome'];
            $idade = $registro['idade'];
            $endereco = $registro['endereco'];

            echo "<tr>";
            echo "<td>" . $id . "</td>";
            echo "<td>" . $nome . "</td>";
            echo "<td>" . $idade . "</td>";
            echo "<td>" . $endereco . "</td>";
            echo "</tr>";
        }
        mysqli_close($strcon);
        echo "</table>";
        ?>
        <h2>Adicionar Alunos</h2>
        <form name="adicionar" action="adicionar.php" method="POST">
            <p>Nome: <input name="nome" type="text"></p>
            <p>Idade: <input name="idade" type="text"></p>
            <p>Endereço: <input name="endereco" type="text"></p>
             <input name="botao" type="submit" value="Cadastrar">
        </form>
        <h2>Excluir Alunos</h2>
        <form name="excluir" action="excluir.php" method="POST">
            <p>ID: <input name="id" type="text"></p>
             <input name="botao" type="submit" value="Excluir">
        </form>
</body>

</html>