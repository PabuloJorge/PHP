<?php
   
    include_once("conectar.php");
  
    $id = $_POST['id'];
    
    $sql = "DELETE FROM alunos WHERE id = '$id' ";

    $resultado = mysqli_query($strcon, $sql);

    echo "<p>Registro excluído com sucesso!</p>";
    

    mysqli_close($strcon);

    
    echo "<a href='../main.php'>VOLTAR</a>";
