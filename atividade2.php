<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de Divisibilidade por 2</title>
</head>
<body>

<?php

function verificarDivisibilidadePor2($numero) {
    if ($numero % 2 == 0) {
        echo "<p>Valor divisível por 2</p>";
    } else {
        echo "<p>O valor não é divisível por 2</p>";
    }
}


$valor = 8;  

verificarDivisibilidadePor2($valor);

?>

</body>
</html>
