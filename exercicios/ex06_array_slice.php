<?php
/**
 * Exercício 6 - Aula 3
 * Extração de amostra de elementos de um arranjo com a função array_slice().
 */

$linguagens = array("PHP", "JavaScript", "Python", "C++", "Java", "Ruby");
sort($linguagens);

// Extrai uma amostra de 3 elementos a partir do índice 1
$amostra = array_slice($linguagens, 1, 3);

echo "<h3>Amostra extraída com array_slice() (Exercício 6):</h3>";
echo "<b>Arranjo completo:</b> " . implode(", ", $linguagens) . "<br>";
echo "<b>Amostra (3 elementos a partir do índice 1):</b> " . implode(", ", $amostra) . "<br>";
?>
