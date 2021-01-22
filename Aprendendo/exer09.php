<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Multidimensional</title>
</head>

<body>
    <?php
    $arrayMulti = array(
        'arrayNumerico' => array("item1" . "item2", "item3"),
        'arrayAssociativo' => array(
            'chave1' => 'valor1',
            'chave2' => 'valor2',
            'chave3' => 'valor3'
        )
    );

    print_r($arrayMulti);

    ?>
</body>

</html>