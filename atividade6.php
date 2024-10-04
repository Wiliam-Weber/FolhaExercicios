<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra de Joãozinho na Feira</title>
</head>
<body>

<?php

function calcularValorProduto($precoPorKg, $quantidadeKg) {
    return $precoPorKg * $quantidadeKg;
}

$dinheiroDisponivel = 50.00;

// Preços dos produtos por Kg
$precoMaca = 4.00;      // R$ 4,00 por Kg de maçã
$precoMelancia = 1.50;  // R$ 1,50 por Kg de melancia
$precoLaranja = 3.00;   // R$ 3,00 por Kg de laranja
$precoRepolho = 2.50;   // R$ 2,50 por Kg de repolho
$precoCenoura = 3.50;   // R$ 3,50 por Kg de cenoura
$precoBatatinha = 2.00; // R$ 2,00 por Kg de batatinha

// Quantidade em Kg que Joãozinho comprou
$qtdMaca = 2;      // 2 Kg de maçã
$qtdMelancia = 4;  // 4 Kg de melancia
$qtdLaranja = 1.5; // 1.5 Kg de laranja
$qtdRepolho = 1;   // 1 Kg de repolho
$qtdCenoura = 2;   // 2 Kg de cenoura
$qtdBatatinha = 12; // 3 Kg de batatinha

// Calculando o valor total da compra
$valorMaca = calcularValorProduto($precoMaca, $qtdMaca);
$valorMelancia = calcularValorProduto($precoMelancia, $qtdMelancia);
$valorLaranja = calcularValorProduto($precoLaranja, $qtdLaranja);
$valorRepolho = calcularValorProduto($precoRepolho, $qtdRepolho);
$valorCenoura = calcularValorProduto($precoCenoura, $qtdCenoura);
$valorBatatinha = calcularValorProduto($precoBatatinha, $qtdBatatinha);

// Somando o valor total gasto
$valorTotalCompra = $valorMaca + $valorMelancia + $valorLaranja + $valorRepolho + $valorCenoura + $valorBatatinha;

// Verificando se o dinheiro é suficiente
if ($valorTotalCompra > $dinheiroDisponivel) {
    $valorFaltante = $valorTotalCompra - $dinheiroDisponivel;
    echo "<p style='color:red;'>O valor da compra foi R$ $valorTotalCompra. Joãozinho não tem dinheiro suficiente. Faltam R$ $valorFaltante.</p>";
} elseif ($valorTotalCompra < $dinheiroDisponivel) {
    $valorRestante = $dinheiroDisponivel - $valorTotalCompra;
    echo "<p style='color:blue;'>O valor da compra foi R$ $valorTotalCompra. Joãozinho ainda pode gastar R$ $valorRestante.</p>";
} else {
    echo "<p style='color:green;'>O valor da compra foi R$ $valorTotalCompra. O saldo para compras foi esgotado.</p>";
}

?>

</body>
</html>
