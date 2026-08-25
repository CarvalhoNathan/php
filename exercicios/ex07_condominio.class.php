<?php
/**
 * Exercício 7a - Aula 4
 * Abstração de um Condomínio (encapsulamento com atributos privados e getters/setters).
 */

class Condominio {
    private $nome;
    private $endereco;
    private $numeroApartamentos;
    private $valorCondominio;
    private $sindico;

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function setNumeroApartamentos($numeroApartamentos) {
        $this->numeroApartamentos = $numeroApartamentos;
    }

    public function getNumeroApartamentos() {
        return $this->numeroApartamentos;
    }

    public function setValorCondominio($valorCondominio) {
        $this->valorCondominio = $valorCondominio;
    }

    public function getValorCondominio() {
        return $this->valorCondominio;
    }

    public function setSindico($sindico) {
        $this->sindico = $sindico;
    }

    public function getSindico() {
        return $this->sindico;
    }
}
?>
