<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio</title>
</head>

<body>
    <h1>Dia e noite</h1>

    <?php
    date_default_timezone_set("America/Sao_Paulo");
    $hoje = date("d/m/y");
    $agora = date("h,i");
    $hora = date("h");

    // if ($hora > 6 && $hora <12){
    //     echo "<img src='imagens/lua.jpg'>";
        

    // }else if ($hora >=12 && $hora <18){
    //     echo "boa tarde";
    
    // } else {
    //     echo "<img src='imagens/sol.jpg'>";
        
    // }

    

    echo "<br>";

    if($hora > 6 && $hora <12){
        echo "bom dia";

    }else if($hora >=12 && $hora <18){
        echo "boa tarde";
    
    }else{
        echo "boa noite";
    }

    // echo "Hoje é dia" . $hoje . "e agora são" . $agora . "horas.";

    ?>
</body>