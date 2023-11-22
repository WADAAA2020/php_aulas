<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área de Retângulo</title>
</head>

<body>

    <?php

    function calcularPerimetroRetangular($l, $a)
    {
        $t = 2 * $l + 2 * $a;
        return $t;
    }

    $total = calcularPerimetroRetangular(12, 10);
    echo "O resultado do perimetro é " . $total;

    echo "<br>";

    function calcularAreaRetangular($l, $a)
    {
        $t = $l * $a;
        return $t;
    }

    $total = calcularAreaRetangular(12, 10);
    echo "O resultado da area é " . $total;

    ?>

</body>

</html>