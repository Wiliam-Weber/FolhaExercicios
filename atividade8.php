<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financiamento da Moto</title>
</head>
<body>

<?php
// Função para calcular o valor das parcelas com juros simples
function calcularParcelas($valorAvista, $numParcelas, $taxaJuros) {
    // Fórmula dos juros simples: Valor Total = Valor à vista * (1 + taxaJuros * número de parcelas)
    $valorTotal = $valorAvista * (1 + ($taxaJuros / 100) * $numParcelas);
    // Valor da parcela é o valor total dividido pelo número de parcelas
    return $valorTotal / $numParcelas;
}

// Valor da moto à vista
$valorAvista = 8654.00;

// Taxa de juros inicial (para 24 vezes)
$taxaJuros24 = 1.5; // 1,5%
$taxaJuros36 = $taxaJuros24 + 0.5; // 2,0%
$taxaJuros48 = $taxaJuros36 + 0.5; // 2,5%
$taxaJuros60 = $taxaJuros48 + 0.5; // 3,0%


$parcela24 = calcularParcelas($valorAvista, 24, $taxaJuros24);
$parcela36 = calcularParcelas($valorAvista, 36, $taxaJuros36);
$parcela48 = calcularParcelas($valorAvista, 48, $taxaJuros48);
$parcela60 = calcularParcelas($valorAvista, 60, $taxaJuros60);


echo "<p>Valor da moto à vista: R$ $valorAvista.</p>";
echo "<p>Parcelas para 24 vezes com taxa de juros de 1,5%: R$ " . number_format($parcela24, 2) . " por mês.</p>";
echo "<p>Parcelas para 36 vezes com taxa de juros de 2,0%: R$ " . number_format($parcela36, 2) . " por mês.</p>";
echo "<p>Parcelas para 48 vezes com taxa de juros de 2,5%: R$ " . number_format($parcela48, 2) . " por mês.</p>";
echo "<p>Parcelas para 60 vezes com taxa de juros de 3,0%: R$ " . number_format($parcela60, 2) . " por mês.</p>";

?>

</body>
</html>
