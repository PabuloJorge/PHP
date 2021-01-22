<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>

<body>
    <?php
    $num = array(1, 2, 3);

    $cores = array("branco", "preto");
    $cores[] = "vermelho"; //adiciona no final do array

    $pessoa = array("Pablo",21, true);

    echo $num[0] . $num[1] . $num[2] . "<br>";
    echo $cores[0] . " " . $cores[1] . " " . $cores[2] . "<br>";

    print_r($num); //mostra o índice e o conteúdo de cada posição
    echo "<br>";
    print_r($cores);
    echo "<br>";
    print_r($pessoa);

    

?>
</body>

</html>