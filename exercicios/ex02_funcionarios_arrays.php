<?php
/**
 * Exercício 2 - Aula 2
 * Processamento de funcionários e salários armazenados originalmente em arranjos.
 */

$nomes = array("Ana Silva", "Carlos Oliveira", "Beatriz Santos", "Daniel Costa");
$salarios = array(2500.50, 1800.00, 3200.75, 950.00);

function exibirListaFuncionarios($arrNomes, $arrSalarios) {
    $total = count($arrNomes);
    for ($i = 0; $i < $total; $i++) {
        echo "<b>Funcionário:</b> " . $arrNomes[$i] . " | <b>Salário:</b> R$ " . number_format($arrSalarios[$i], 2, ',', '.') . "<br>";
    }
}

echo "<h3>Lista de Funcionários via Arrays (Exercício 2):</h3>";
exibirListaFuncionarios($nomes, $salarios);
?>
