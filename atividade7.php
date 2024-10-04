<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financiamento do Carro</title>
</head>
<body>

<?php

function calcularValorFinanciamento($valorParcela, $numParcelas) {
    return $valorParcela * $numParcelas;
}

// Valor do carro à vista
$valorAvista = 22500.00;

// Parcelas do financiamento
$valorParcela = 489.65; // Valor de cada parcela
$numParcelas = 60;      // Quantidade de parcelas

$valorTotalFinanciamento = calcularValorFinanciamento($valorParcela, $numParcelas);


$valorJuros = $valorTotalFinanciamento - $valorAvista;


echo "<p>O valor total do financiamento é R$ $valorTotalFinanciamento.</p>";
echo "<p>Mariazinha pagará R$ $valorJuros em juros no financiamento, comparado ao valor à vista do carro.</p>";

?>

</body>
</html>
