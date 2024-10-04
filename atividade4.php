<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo da Área do Retângulo</title>
</head>
<body>

<?php

function calcularAreaRetangulo($ladoA, $ladoB) {
    return $ladoA * $ladoB;
}

// Definindo os comprimentos dos lados do retângulo
$ladoA = 3;  
$ladoB = 5;  


$area = calcularAreaRetangulo($ladoA, $ladoB);

if ($area > 10) {
    echo "<h1>A área do retângulo de lados $ladoA e $ladoB metros é $area metros quadrados.</h1>";
} else {
    echo "<h3>A área do retângulo de lados $ladoA e $ladoB metros é $area metros quadrados.</h3>";
}

?>

</body>
</html>
