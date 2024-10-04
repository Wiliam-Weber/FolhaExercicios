<?php
$pastas = array(
    "bsn" => array(
        "3a Fase" => array(
            "desenvWeb",
            "bancoDados 1",
            "engSoft 1"
        ),
        "4a Fase" => array(
            "Intro Web",
            "bancoDados 2",
            "engSoft 2"
        )
    )
);

// Função recursiva para imprimir a árvore com quebras de linha
function imprimirArvore($pastas, $nivel = 0) {
    foreach ($pastas as $chave => $valor) {
        // Indentação e quebra de linha
        echo str_repeat("-", $nivel * 2) . " " . (is_array($valor) ? $chave : $valor) . "<br>";
        
        if (is_array($valor)) {
            imprimirArvore($valor, $nivel + 1);
        }
    }
}

echo "<pre>";
imprimirArvore($pastas);
echo "</pre>";
?>

