<?php
/**
 * Manipulação de Arranjos Associativos (chave => valor)
 * Disciplina: Programação Orientada a Objetos com PHP
 */

$carro = array();
$carro['marca'] = 'Volkswagen';
$carro['modelo'] = 'Fusca';
$carro['cor'] = 'Verde';
$carro['preço'] = 5500.00;

// Desconto no preço
$carro['preço'] -= 500.00;

echo "<b>Marca:</b> " . $carro['marca'] . "<br>";
echo "<b>Modelo:</b> " . $carro['modelo'] . "<br>";
echo "<b>Cor:</b> " . $carro['cor'] . "<br>";
echo "<b>Preço com Desconto:</b> R$ " . number_format($carro['preço'], 2, ',', '.') . "<br>";
?>
