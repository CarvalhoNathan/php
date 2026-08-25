<?php
/**
 * Manipulação de Arrays Multidimensionais
 * Disciplina: Programação Orientada a Objetos com PHP
 */

$carro = array(
    'Fusca' => array(
        'ano' => 1977,
        'marca' => 'Volkswagen',
        'acessórios' => 'Rádio FM'
    ),
    'Kombi' => array(
        'ano' => 1975,
        'marca' => 'Volkswagen',
        'acessórios' => 'Pintura saia e blusa'
    ),
    'Belina' => array(
        'ano' => 1981,
        'marca' => 'Ford',
        'acessórios' => 'Acendedor de cigarro'
    )
);

echo "<b>Acessórios da Kombi:</b> " . $carro['Kombi']['acessórios'] . "<br>";
echo "<b>Ano do Fusca:</b> " . $carro['Fusca']['ano'] . "<br>";
echo "<b>Marca da Belina:</b> " . $carro['Belina']['marca'] . "<br>";
echo "<b>Acessórios da Belina:</b> " . $carro['Belina']['acessórios'] . "<br>";
?>
