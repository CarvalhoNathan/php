<?php
/**
 * Exercício 5 - Aula 3
 * Retornar e exibir a quantidade de elementos de um arranjo usando a função count().
 */

$linguagens = array("PHP", "JavaScript", "Python", "C++", "Java", "Ruby");

sort($linguagens);
$totalElementos = count($linguagens);

echo "<h3>Contagem de Elementos (Exercício 5):</h3>";
echo "O arranjo contém <b>$totalElementos</b> elementos.<br><br>";

echo "<b>Elementos do arranjo:</b><br>";
foreach ($linguagens as $index => $valor) {
    echo "- $valor (Posição $index)<br>";
}
?>
