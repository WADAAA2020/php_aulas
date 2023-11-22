<html>

<head>
    <title>Ex php</title>
    <meta charset="UTF-8">
</head>

<body>
    <h1>Data hoje</h1>

Hoje é

<?php

date_default_timezone_set(
    'America/Sao_Paulo');

    echo date("d/m/y");

    ?>.

</body>

</html>