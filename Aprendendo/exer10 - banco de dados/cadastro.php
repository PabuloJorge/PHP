<?php

    include_once("conectar.php");

    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];


    $sql = "INSERT INTO usuarios VALUES ('$nome', '$endereco', '$cidade')";

    $resultado = mysqli_query($strcon, $sql);

    mysqli_close($strcon);

    

?>