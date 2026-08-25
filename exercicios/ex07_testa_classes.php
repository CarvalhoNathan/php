<?php
/**
 * Exercício 7c - Aula 4
 * Instanciação das classes Condominio e Padaria, atribuição de valores e exibição no navegador.
 */

include_once 'ex07_condominio.class.php';
include_once 'ex07_padaria.class.php';

// Instanciando o objeto Condominio
$meuCondominio = new Condominio();
$meuCondominio->setNome("Residencial Vista do Mar");
$meuCondominio->setEndereco("Av. Ana Costa, 150 - Santos/SP");
$meuCondominio->setNumeroApartamentos(48);
$meuCondominio->setValorCondominio(650.00);
$meuCondominio->setSindico("Roberto Mendonça");

// Instanciando o objeto Padaria
$minhaPadaria = new Padaria();
$minhaPadaria->setNomeFantasia("Padaria Pão D'Oro");
$minhaPadaria->setEndereco("Rua Gonzaga, 88 - Santos/SP");
$minhaPadaria->setQuantidadePaesDia(2500);
$minhaPadaria->setEspecialidade("Pão na Chapa com Requeijão e Croissant");
$minhaPadaria->setHorarioAbertura("06:00 - 21:00");

// Exibição dos dados no navegador
echo "<h2>Demonstração de Abstração e Encapsulamento (Exercício 7c)</h2>";

echo "<div style='border: 1px solid #ccc; padding: 15px; margin-bottom: 20px; border-radius: 5px;'>";
echo "<h3>🏢 Condomínio</h3>";
echo "<b>Nome:</b> " . $meuCondominio->getNome() . "<br>";
echo "<b>Endereço:</b> " . $meuCondominio->getEndereco() . "<br>";
echo "<b>Apartamentos:</b> " . $meuCondominio->getNumeroApartamentos() . "<br>";
echo "<b>Valor da Taxa:</b> R$ " . number_format($meuCondominio->getValorCondominio(), 2, ',', '.') . "<br>";
echo "<b>Síndico Responsável:</b> " . $meuCondominio->getSindico() . "<br>";
echo "</div>";

echo "<div style='border: 1px solid #ccc; padding: 15px; border-radius: 5px;'>";
echo "<h3>🥖 Padaria</h3>";
echo "<b>Nome Fantasia:</b> " . $minhaPadaria->getNomeFantasia() . "<br>";
echo "<b>Endereço:</b> " . $minhaPadaria->getEndereco() . "<br>";
echo "<b>Produção Diária de Pães:</b> " . $minhaPadaria->getQuantidadePaesDia() . " unidades<br>";
echo "<b>Especialidade:</b> " . $minhaPadaria->getEspecialidade() . "<br>";
echo "<b>Horário de Funcionamento:</b> " . $minhaPadaria->getHorarioAbertura() . "<br>";
echo "</div>";
?>
