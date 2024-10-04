<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de Três Valores</title>
</head>
<body>

<?php
function somarTresValores($a, $b, $c) {
    return $a + $b + $c;
}

function exibirResultado($resultado, $cor) {
    echo "<p style='color:$cor;'>O resultado da soma é: $resultado</p>";
}

$var1 = 6;  // Exemplo de valor maior que 10
$var2 = 5;
$var3 = 4;

$resultado = somarTresValores($var1, $var2, $var3);

if ($var1 > 10) {
    exibirResultado($resultado, "blue");
}

if ($var2 < $var3) {
    exibirResultado($resultado, "green");
}

if ($var3 < $var1 && $var3 < $var2) {
    exibirResultado($resultado, "red");
}

?>

</body>
</html>
