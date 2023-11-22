<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>

<body>

    <h1>Funções</h1>
    <br>
    <h1>SOMA</h1>

    <?php

    function soma($i, $j)
    {
        $k = $i + $j;
        return $k;
    }

    $res1 = soma(4, 5);
    echo "O resultado da soma 1 (de 4 com 5) é " . $res1;
    echo "<br>";

    $res2 = soma(2, 3);
    echo "O resultado da soma 2 (de 2 com 3) é " . $res2;
    echo "<br>";

    $res3 = soma(-1, -7);
    echo "O resultado da soma 3 (de -1 com -7) é " . $res3;
    echo "<br>";

    ?>

    <h1>Mult</h1>

    <?php

    function mult($a, $b)
    {
        $w = $a * $b;
        return $w;
    }

    $res4 = mult(2, 3);
    echo "O resultado da mult 4 (de 2 com 3) é " . $res4;
    echo "<br>";

    $res5 = mult(6, 3);
    echo "O resultado da mult 5 (de 6 com 3) é " . $res5;
    echo "<br>";

    $res6 = mult(1, 1);
    echo "O resultado da mult 6 (de 1 com 1) é " . $res6;
    echo "<br>";

    ?>

</body>

</html>