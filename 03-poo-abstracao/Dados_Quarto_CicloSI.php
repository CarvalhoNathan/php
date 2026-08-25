<?php
/**
 * Instanciação e manipulação de objeto da classe Quarto_CicloSI
 * Disciplina: Programação Orientada a Objetos com PHP
 */

include_once 'Quarto_CicloSI.class.php';

$SI = new Quarto_CicloSI();

$SI->set_materia('Programação Orientada a Objetos com PHP');
$SI->set_professor('Mauricio Conceição Mario');
$SI->set_fatec('Baixada Santista');
$SI->set_quantidade_alunos(35);
$SI->set_periodo('Noturno');

echo "<h2>Dados da Turma - 4º Ciclo de SI</h2>";
echo "<b>Matéria:</b> " . $SI->get_materia() . "<br>";
echo "<b>Professor:</b> " . $SI->get_professor() . "<br>";
echo "<b>FATEC:</b> " . $SI->get_fatec() . "<br>";
echo "<b>Quantidade de Alunos:</b> " . $SI->get_quantidade_alunos() . "<br>";
echo "<b>Período:</b> " . $SI->get_periodo() . "<br>";
?>
