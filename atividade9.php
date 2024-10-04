<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financiamento da Moto</title>
</head>
<body>

<?php
function calcularParcelasCompostos($capital, $taxaJuros, $tempo) {
    // Fórmula dos juros compostos: M = C * (1 + i)^t
    $montante = $capital * pow((1 + $taxaJuros), $tempo);
    // Valor da parcela é o montante total dividido pelo número de parcelas
    return $montante / $tempo;
}


$capitalInicial = 8654.00;

// Taxa de juros inicial (para 24 vezes)
$taxaInicial = 0.02; // 2%


$opcoesParcelamento = [24, 36, 48, 60];

foreach ($opcoesParcelamento as $parcelas) {
    // Calcula a taxa de juros para cada opção de parcelamento
    $taxaJuros = $taxaInicial + (0.003 * (($parcelas / 12) - 2));
    // Calcula o valor da parcela
    $valorParcela = calcularParcelasCompostos($capitalInicial, $taxaJuros, $parcelas);

    echo "<p>Parcelas para $parcelas vezes com taxa de juros de " . ($taxaJuros * 100) . "%: R$ " . number_format($valorParcela, 2, ',', '.') . " por mês.</p>";
}
?>

</body>
</html>
