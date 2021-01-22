<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Multidimensional</title>
</head>

<body>
    <?php
    $matriz = array(
        array(1, 2, 3),
        array(4, 5, 6),
        array(7, 8, 9)
    );

    for ($linha = 0; $linha < sizeof($matriz); $linha++) {
        for ($coluna = 0; $coluna < sizeof($matriz[$linha]); $coluna++) {
                 echo $matriz[$linha][$coluna]. " ";
        }
        echo "<br>";
    }

    ?>
</body>

</html>