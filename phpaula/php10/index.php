<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média de Notas</title>
</head>

<body>

    <?php

    echo "Média <br>
    ";

    function calcularMedia($notas)
    {
        $total = array_sum($notas);
        $quantidade = count($notas);
        $media = $total / $quantidade;
        return $media;
    }

    $notasAluno1 = array(10,5,8,6);
    $mediaAluno1 = calcularMedia($notasAluno1);
    echo "A media é " .$mediaAluno1;

    ?>

</body>

</html>