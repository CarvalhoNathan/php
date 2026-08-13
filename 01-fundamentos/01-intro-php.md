# Resumo: Introdução ao PHP e Ambiente de Desenvolvimento

> **Data:** 03/08/2026 <br>
> **Módulo:** 01 - Fundamentos (Parte 1)

## 1. O que é PHP?
O PHP (*Hypertext Processor*) é uma linguagem de script **server-side** (lado do servidor). Sua função principal é processar recursos solicitados por um navegador e gerar conteúdo HTML dinâmico que será interpretado pelo cliente.

## 2. Arquitetura de Funcionamento
O ciclo de vida de uma requisição PHP segue este fluxo:
1. **Solicitação:** O navegador do usuário solicita um recurso (via URL).
2. **Processamento:** O servidor web processa o script PHP.
3. **Interação:** O PHP pode consultar bancos de dados ou realizar lógica de backend.
4. **Resposta:** O servidor devolve ao navegador uma página HTML pura, pronta para exibição.

## 3. Ambiente de Desenvolvimento (XAMPP)
Para rodar PHP localmente, utilizamos o **XAMPP**, uma distribuição que facilita a instalação do servidor Apache, PHP e MySQL.

* **Diretório de Trabalho:** Todos os arquivos `.php` devem ser salvos na pasta raiz do servidor, geralmente em: `C:\xampp\htdocs\`.
* **Serviço Apache:** Deve estar rodando (status *running*) no XAMPP Control Panel para que as páginas sejam acessíveis via `localhost`.

## 4. Estrutura Básica de um Script
Scripts PHP podem conter uma mistura de HTML, CSS e código PHP. A execução do código PHP ocorre no servidor, sendo invisível para o código-fonte final que chega ao navegador.

### Exemplo de integração HTML + PHP:
```php
<form action="exemplo.php" method="POST">
    <input type="text" name="nome">
    <input type="submit" value="Enviar">
</form>

<?php
    $nome =$_POST["nome"];
    echo "Nome: " . $nome;
?>
```

## 5. Dicas do Professor
* Sempre verifique se o serviço Apache está ativo no Painel de Controle do XAMPP.
* Utilize editores de código (como Notepad++ ou VS Code) para melhor visualização da sintaxe.
* O atributo action no formulário HTML define qual script será responsável por processar os dados submetidos.

--- 

*Fonte: Baseado no material de aula "Programação Orientada a Objetos com PHP" - Prof. Mauricio Conceição Mario.*
