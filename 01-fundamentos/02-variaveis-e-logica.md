# Resumo: Variáveis, Condicionais, Laços e Funções em PHP

> **Data:** 10/08/2026 <br>
> **Módulo:** 01 - Fundamentos (Parte 2)

## 1. Manipulação de Variáveis e Tipagem
O PHP permite a manipulação de diversos tipos de dados (strings, inteiros, ponto flutuante). É possível realizar conversões explícitas de tipos (casting) e utilizar funções nativas para processamento:

* **Conversão:** `(int) $variavel` ou `(float) $variavel`.
* **Funções de String:** `strlen($string)` retorna o tamanho de uma variável do tipo string.
* **Input de Dados:** Utiliza-se `$_POST['nome_do_campo']` para capturar dados enviados via formulários HTML.

## 2. Estruturas Condicionais
Permitem o controle de fluxo baseados em condições lógicas.

* **`if / else if / else`:** Avalia expressões booleanas. Operadores lógicos como `and` e `or` podem ser utilizados para testar múltiplas condições simultaneamente.
* **Exemplo:**
```php
if (($tempo_servico >= 20) and ($salario > 1000.00)) {
    print "Condição atendida";
} else {
    print "Condição não atendida";
}
```

## 3. Estruturas de Repetição (Laços) 
Essenciais para automatizar tarefas repetitivas ou processar conjuntos de dados. 
* **`while`:** Executa um bloco de código enquanto a condição for verdadeira. 
* **`foreach`:** A forma ideal para percorrer **arrays**. Ele itera sobre cada valor do array de forma simples. 
  * *Exemplo:* `foreach ($frutas as $valor) { print $valor; }` 

## 4. Funções e Modularização O PHP suporta a criação de blocos de código reutilizáveis. 
* **Definição:** Utiliza a palavra-chave `function nomeFuncao($param) { return ... }`. 
* **Modularização:** O comando `include 'arquivo.php';` permite carregar blocos de código externos, facilitando a organização de grandes projetos. 
* **Variáveis Estáticas (`static`):** Dentro de uma função, variáveis declaradas como `static` mantêm o seu valor entre chamadas sucessivas, sendo úteis para contadores ou acumuladores. 

## 5. Dicas do Professor 
* Sempre utilize `nl2br()` ao imprimir quebras de linha (`\n`) para que sejam corretamente exibidas no navegador como `
`. 
* A organização em bibliotecas (`include`) é uma prática fundamental para não duplicar código e manter o projeto legível. 

--- 

*Fonte: Baseado no material de aula "Programação Orientada a Objetos com PHP - Atribuição, Condicionais, Arranjos e Funções" - Prof. Mauricio Conceição Mario.*
