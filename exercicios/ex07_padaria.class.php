<?php
/**
 * Exercício 7b - Aula 4
 * Abstração de uma Padaria (encapsulamento com atributos privados e getters/setters).
 */

class Padaria {
    private $nomeFantasia;
    private $endereco;
    private $quantidadePãesDia;
    private $especialidade;
    private $horarioAbertura;

    public function setNomeFantasia($nomeFantasia) {
        $this->nomeFantasia = $nomeFantasia;
    }

    public function getNomeFantasia() {
        return $this->nomeFantasia;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function setQuantidadePaesDia($quantidadePãesDia) {
        $this->quantidadePãesDia = $quantidadePãesDia;
    }

    public function getQuantidadePaesDia() {
        return $this->quantidadePãesDia;
    }

    public function setEspecialidade($especialidade) {
        $this->especialidade = $especialidade;
    }

    public function getEspecialidade() {
        return $this->especialidade;
    }

    public function setHorarioAbertura($horarioAbertura) {
        $this->horarioAbertura = $horarioAbertura;
    }

    public function getHorarioAbertura() {
        return $this->horarioAbertura;
    }
}
?>
