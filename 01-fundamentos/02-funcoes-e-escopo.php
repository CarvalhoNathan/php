<?php
/**
 * Exemplo de definição e invocação de funções
 * Disciplina: Programação Orientada a Objetos com PHP
 */

/**
 * Retorna o quadrado de um número
 * 
 * @param float|int $numero
 * @return float|int
 */
function quadrado($numero) {
    return $numero * $numero;
}

// Invocação da função
$resultado = quadrado(2.2);
echo "O quadrado de 2.2 é: " . $resultado . "<br>";
?>
