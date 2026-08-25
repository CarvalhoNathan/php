<?php
/**
 * Manipulação de Arranjos Indexados Numericamente
 * Disciplina: Programação Orientada a Objetos com PHP
 */

// Array numérico com atribuição implícita
$frutas = array("maçã", "laranja", "mamão", "banana");

echo "<h3>Iterando com foreach:</h3>";
foreach ($frutas as $valor) {
    print "$valor\t";
}
echo "<br><br>";

// Array numérico com chaves explícitas
$frutas_chaves = array(0 => "maçã", 1 => "laranja", 2 => "mamão", 3 => "banana");

echo "<h3>Acessando por índice direto:</h3>";
echo nl2br($frutas_chaves[0] . "\n");
echo nl2br($frutas_chaves[1] . "\n");
echo nl2br($frutas_chaves[2] . "\n");
echo nl2br($frutas_chaves[3] . "\n");
?>
