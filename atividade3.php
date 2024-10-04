<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo da Área do Quadrado</title>
</head>
<body>

<?php
function calcularAreaQuadrado($lado) {
    return $lado * $lado;
}

// Definindo o comprimento do lado do quadrado
$lado = 5;  


$area = calcularAreaQuadrado($lado);

echo "<p>A área do quadrado de lado $lado metros é $area metros quadrados.</p>";

?>

</body>
</html>
