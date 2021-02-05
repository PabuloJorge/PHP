<?php
   
    include_once("conectar.php");
  
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    
    $sql = "UPDATE alunos SET nome='$nome' WHERE id = '$id' ";
   
    $resultado = mysqli_query($strcon, $sql);

    echo "<p>Editado com sucesso!</p>";
    

    mysqli_close($strcon);

    
    echo "<a href='../main.php'>VOLTAR</a>";