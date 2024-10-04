<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo da Área de um Triângulo Retângulo</title>
</head>
<body>

<?php

function calcularAreaTriangulo($base, $altura) {
    return ($base * $altura) / 2;
}

// Definindo os valores da base e altura do triângulo
$base = 7;    
$altura = 10;  


$area = calcularAreaTriangulo($base, $altura);


echo "<p>A área do triângulo retângulo com base de $base metros e altura de $altura metros é $area metros quadrados.</p>";

?>

</body>
</html>
