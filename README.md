# Programação Orientada a Objetos com PHP

Repositório com os conteúdos, exemplos de código e exercícios práticos da disciplina de **Programação Orientada a Objetos com PHP** (FATEC Baixada Santista, 2º semestre de 2026 - Prof. Mauricio Conceição Mario).

---

## 📚 Plano de Ensino e Cronograma

| Conteúdo / Atividade | Status | Material Oficial de Apoio |
| :--- | :---: | :--- |
| **Plano de Ensino & Datas de Provas** | ℹ️ | [`01_Plano_de_Ensino_Topicos_Especiais.pdf`](docs/01_Plano_de_Ensino_Topicos_Especiais.pdf) |
| **Aula I:** Introdução ao ambiente de Programação PHP | ✅ | [`02_Introducao_ao_ambiente_de_Programacao_PHP_I.pdf`](docs/02_Introducao_ao_ambiente_de_Programacao_PHP_I.pdf) |
| **Aula II:** Características dos tipos de variáveis com PHP | ✅ | [`03_Caracteristicas_dos_tipos_de_variaveis_com_PHP_II.pdf`](docs/03_Caracteristicas_dos_tipos_de_variaveis_com_PHP_II.pdf) |
| **Aula III:** Manipulação de Arranjos | ✅ | [`04_Manipulacao_de_Arranjos_III.pdf`](docs/04_Manipulacao_de_Arranjos_III.pdf) |
| **Aula IV:** Exemplo de Abstração (POO) | ✅ | [`05_Exemplo_de_Abstracao_IV.pdf`](docs/05_Exemplo_de_Abstracao_IV.pdf) |
| Classes, Objetos e Métodos Construtores | 🔒 | *(Próximas Aulas)* |
| Manipulação de dados utilizando PHP e HTML | 🔒 | *(Próximas Aulas)* |
| **Avaliação do 1º bimestre → 28/09** | 📅 | |
| Herança | 🔒 | *(Próximas Aulas)* |
| Polimorfismo | 🔒 | *(Próximas Aulas)* |
| Classes Abstratas | 🔒 | *(Próximas Aulas)* |
| Interfaces | 🔒 | *(Próximas Aulas)* |
| Manipulação de dados em arquivos XML | 🔒 | *(Próximas Aulas)* |
| Manipulação de banco de dados | 🔒 | *(Próximas Aulas)* |
| **Avaliação do 2º bimestre → 16/11** | 📅 | |
| **Avaliação substitutiva → 30/11** | 📅 | |

---

## 🗂️ Estrutura do Repositório

```text
.
├── 📁 01-fundamentos/          # Fundamentos da linguagem, controle de fluxo e funções
│   ├── 01-intro-php.md
│   ├── 02-variaveis-e-logica.md
│   ├── 01-enquanto.php
│   ├── 02-funcoes-e-escopo.php
│   └── 03-variaveis-static.php
├── 📁 02-arranjos/             # Manipulação de arrays simples, associativos e multidimensionais
│   ├── 01-arranjos-indexados.php
│   ├── 02-arranjos-associativos.php
│   └── 03-array-multidimensional.php
├── 📁 03-poo-abstracao/        # Conceitos iniciais de POO, abstração e encapsulamento
│   ├── Quarto_CicloSI.class.php
│   └── Dados_Quarto_CicloSI.php
├── 📁 docs/                    # Materiais das aulas disponibilizados pelo professor
│   ├── 01_Plano_de_Ensino_Topicos_Especiais.pdf
│   ├── 02_Introducao_ao_ambiente_de_Programacao_PHP_I.pdf
│   ├── 03_Caracteristicas_dos_tipos_de_variaveis_com_PHP_II.pdf
│   ├── 04_Manipulacao_de_Arranjos_III.pdf
│   └── 05_Exemplo_de_Abstracao_IV.pdf
├── 📁 exercicios/              # Soluções dos exercícios propostos nos slides
│   ├── ex01_funcionarios.php        # Exercício 1 (Aula II) - Impressão de salários
│   ├── ex02_funcionarios_arrays.php # Exercício 2 (Aula II) - Salários em arranjos
│   ├── ex03_filtro_salarios.php     # Exercício 3 (Aula II) - Filtro salários > 1000
│   ├── ex04_array_sort.php          # Exercício 4 (Aula III) - Ordenação com sort()
│   ├── ex05_array_count.php         # Exercício 5 (Aula III) - Contagem com count()
│   ├── ex06_array_slice.php         # Exercício 6 (Aula III) - Amostragem com array_slice()
│   ├── ex07_condominio.class.php    # Exercício 7a (Aula IV) - Classe Condomínio
│   ├── ex07_padaria.class.php       # Exercício 7b (Aula IV) - Classe Padaria
│   └── ex07_testa_classes.php       # Exercício 7c (Aula IV) - Instanciação e exibição web
└── README.md
```

---

## 💻 Como Executar os Exemplos

### Opção 1: Utilizando o Servidor Embutido do PHP (CLI)
Se você tiver o PHP instalado no terminal, execute na raiz do projeto:
```bash
php -S localhost:8000
```
Em seguida, acesse no navegador: `http://localhost:8000/exercicios/ex07_testa_classes.php`

### Opção 2: Utilizando XAMPP
1. Copie esta pasta para dentro do diretório `htdocs` do seu XAMPP (`C:\xampp\htdocs\php`).
2. Inicie o serviço **Apache** no XAMPP Control Panel.
3. Abra o navegador e acesse `http://localhost/php/`.

---

## 📖 Bibliografia
- *PHP Programando com Orientação a Objetos* - Pablo Dall'Oglio - Editora Novatec - 2014
- *Desenvolvimento Web com PHP e MySQL* - Evaldo Junior Bento - Editora Casa do Código - 2018
- *“Use a Cabeça!” PHP & MySQL* - Lynn Beighley & Michael Morrison - Editora Alta Books - 2010

---

## 📊 Critério de Avaliação
- **Média Bimestral** = $0.6 \times \text{Prova} + 0.4 \times \text{Trabalho}$
- **Média Final** = $(\text{Avaliação Bimestre 1} + \text{Avaliação Bimestre 2}) / 2 \ge 5,75$
