<?php
/**
 * Exercício 3 - Aula 2
 * Relação de 10 pares funcionário-salário, filtrando apenas aqueles com salário > R$ 1000.00.
 */

$funcionarios = array(
    "João Pedro" => 850.00,
    "Maria Eduarda" => 1450.00,
    "Lucas Mendes" => 980.00,
    "Fernanda Lima" => 2300.00,
    "Gabriel Souza" => 1200.50,
    "Amanda Rocha" => 950.00,
    "Rodrigo Alves" => 3100.00,
    "Camila Torres" => 1050.00,
    "Felipe Barbosa" => 750.00,
    "Juliana Martins" => 1850.00
);

echo "<h3>Funcionários com salário superior a R$ 1.000,00 (Exercício 3):</h3>";

foreach ($funcionarios as $nome => $salario) {
    if ($salario > 1000.00) {
        echo "<b>Nome:</b> " . $nome . " | <b>Salário:</b> R$ " . number_format($salario, 2, ',', '.') . "<br>";
    }
}
?>
