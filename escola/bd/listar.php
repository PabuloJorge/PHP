<?php
    function listar($conection){
    echo "<table name='lista' border='1' width='50%'>
        <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>IDADE</th>
        <th>ENDEREÇO</th>
        </tr>";

        

        $sql = "SELECT * FROM alunos";
        $resultado = mysqli_query($conection, $sql);

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
        mysqli_close($conection);
        echo "</table>";
    }
    ?>