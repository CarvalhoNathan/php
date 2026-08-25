<?php
/**
 * Exemplo de uso de variáveis estáticas (static) dentro de funções
 * Disciplina: Programação Orientada a Objetos com PHP
 */

function somatoria($a) {
    /* A variável estática mantém o seu valor entre chamadas sucessivas */
    static $b = 0;
    $b += $a;
    echo "<b>Valor de a</b> = $a | <b>Valor acumulado em b (static)</b> = $b<br>";
}

somatoria(2);
somatoria(4);
somatoria(6);
?>
