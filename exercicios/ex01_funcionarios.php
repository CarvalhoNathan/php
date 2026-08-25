<?php
/**
 * Exercício 1 - Aula 2
 * Função que recebe nome e salário de funcionários e os exibe formatados.
 */

function exibirFuncionario($nome, $salario) {
    echo "<b>Funcionário:</b> " . $nome . " | <b>Salário:</b> R$ " . number_format($salario, 2, ',', '.') . "<br>";
}

echo "<h3>Lista de Funcionários (Exercício 1):</h3>";
exibirFuncionario("Ana Silva", 2500.50);
exibirFuncionario("Carlos Oliveira", 1800.00);
exibirFuncionario("Beatriz Santos", 3200.75);
?>
