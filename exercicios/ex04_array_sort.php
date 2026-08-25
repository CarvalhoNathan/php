<?php
/**
 * Exercício 4 - Aula 3
 * Exibir elementos de um arranjo ordenados (fora da ordem original dos índices) com a função sort().
 */

$linguagens = array("PHP", "JavaScript", "Python", "C++", "Java", "Ruby");

echo "<b>Arranjo original:</b> " . implode(", ", $linguagens) . "<br><br>";

// Ordena os elementos do arranjo em ordem alfabética
sort($linguagens);

echo "<h3>Arranjo ordenado com sort() (Exercício 4):</h3>";
foreach ($linguagens as $index => $valor) {
    echo "Índice $index: $valor <br>";
}
?>
