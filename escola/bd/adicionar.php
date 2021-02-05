<?php

    include_once("conectar.php");

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $endereco = $_POST['endereco'];
 


    $sql = "INSERT INTO alunos (nome, idade, endereco) VALUES ('$nome', '$idade', '$endereco')";

    $resultado = mysqli_query($strcon, $sql);

    mysqli_close($strcon);

    echo "<p>Registro cadastrado com sucesso!</p>";
    echo "<a href='../main.php'>VOLTAR</a>";

?>