<?php
include_once("./bd/conectar.php");
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
    <header>
        <img src="./img/logo.png" alt=""><h1>Escola Da Conquista</h1>
    </header>

    <section>
    <div class="tabela">
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
    </div>
    
        <div class="adicionar">
            <h2>Adicionar Alunos</h2>
            <form name="adicionar" action="./bd/adicionar.php" method="POST">
                <label>Nome: <input name="nome" type="text"></label>
                <label>Idade: <input name="idade" type="text"></label>
                <label>Endereço: <input name="endereco" type="text"></label>
                <input name="botao" type="submit" value="Cadastrar" class="botao">
            </form>
        </div>

        <div class="excluir">
            <h2>Excluir Alunos</h2>
            <form name="excluir" action="./bd/excluir.php" method="POST">
                <label>ID: <input name="id" type="text"></label>
                <input name="botao" type="submit" value="Excluir" class="botao">
            </form>
        </div>

        <div class="editar">
            <h2>Editar Nome dos Alunos</h2>
            <form name="editar" action="./bd/editar.php" method="POST">
                <label>ID: <input name="id" type="text"></label>
                <label>Novo nome: <input name="nome" type="text"></label>
                <input name="botao" type="submit" value="Editar" class="botao">
            </form>
        </div>
        </section>
</body>

</html>